<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenalizacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Penalizaciones';
?>
<div class="penalizacion-index">

    <h1><?= Html::encode('Penalizaciones') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Penalización', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PEN_id',
            'PEN_nombre',
            'PEN_descripcion',
            'PEN_costo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
