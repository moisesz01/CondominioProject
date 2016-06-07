<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Moras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MOR_id',
            'MOR_mes',
            'MOR_numdias',
            'cliente_CLI_cedula',
            'penalizacion_PEN_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
