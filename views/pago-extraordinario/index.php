<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PagoExtraordinarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Pagos Extraordinarios';
?>
<div class="pago-extraordinario-index">

    <h1><?= Html::encode('Pagos Extraordinarios') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Pago Extraordinario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PEX_id',
            'PEX_nombre',
            'PEX_descripcion',
            'PEX_fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
