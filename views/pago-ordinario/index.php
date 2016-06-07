<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PagoOrdinarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Pagos Ordinarios';
?>
<div class="pago-ordinario-index">

    <h1><?= Html::encode('Pagos Ordinarios') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Pago Ordinario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PSA_id',
            'PSA_nombre',
            'PSA_descripcion',
            'PSA_costo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
