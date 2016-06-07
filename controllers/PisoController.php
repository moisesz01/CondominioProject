<?php

namespace app\controllers;

use Yii;
use app\models\Piso;
use app\models\Model;
use app\models\Apartamento;
use app\models\PisoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * PisoController implements the CRUD actions for Piso model.
 */
class PisoController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Piso models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PisoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Piso model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $modelsApartamento = $model->apartamentos;
        return $this->render('view', [
            'model' => $this->findModel($id),
            'modelsApartamento'=> $modelsApartamento,
        ]);
    }

    /**
     * Creates a new Piso model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){

        $modelPiso = new Piso;
        $modelsApartamento = [new Apartamento];
        if ($modelPiso->load(Yii::$app->request->post())) {

            $modelsApartamento = Model::createMultiple(Apartamento::classname());
            Model::loadMultiple($modelsApartamento, Yii::$app->request->post());

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsApartamento),
                    ActiveForm::validate($modelPiso)
                );
            }

            // validate all models
            $valid = $modelPiso->validate();
            $valid = Model::validateMultiple($modelsApartamento) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $modelPiso->save(false)) {
                        foreach ($modelsApartamento as $modelApartamento) {
                            $modelApartamento->piso_PIS_id = $modelPiso->id;
                            if (! ($flag = $modelApartamento->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelPiso->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('create', [
            'modelPiso' => $modelPiso,
            'modelsApartamento' => (empty($modelsApartamento)) ? [new Apartamento] : $modelsApartamento
        ]);
    }

    /*public function actionCreate()
    {
        $modelPiso = new Piso();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->PIS_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Updates an existing Piso model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */

    public function actionUpdate($id)
    {
        $modelPiso = $this->findModel($id);
        $modelsApartamento = $modelPiso->apartamentos;

        if ($modelPiso->load(Yii::$app->request->post())) {

            $oldIDs = ArrayHelper::map($modelsApartamento, 'id', 'id');
            $modelsApartamento = Model::createMultiple(Apartamento::classname(), $modelsApartamento);
            Model::loadMultiple($modelsApartamento, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsApartamento, 'id', 'id')));

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsApartamento),
                    ActiveForm::validate($modelPiso)
                );
            }

            // validate all models
            $valid = $modelPiso->validate();
            
            
            $valid = Model::validateMultiple($modelsApartamento) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $modelPiso->save(false)) {
                        if (! empty($deletedIDs)) {
                            Apartamento::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelsApartamento as $modelApartamento) {
                            $modelApartamento->piso_PIS_id = $modelPiso->id;
                            if (! ($flag = $modelApartamento->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelPiso->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('update', [
            'modelPiso' => $modelPiso,
            'modelsApartamento' => (empty($modelsApartamento)) ? [new Apartamento] : $modelsApartamento
        ]);
    }
    /*public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->PIS_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Deletes an existing Piso model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Piso model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Piso the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Piso::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
