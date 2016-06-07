<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetalleFacturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle Facturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-factura-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detalle Factura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DFAC_id',
            'DFAC',
            'factura_FAC_id',
            'pagoOrdinario_PSA_id',
            'pagoExtraordinario_PEX_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
