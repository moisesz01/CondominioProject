<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetalleFactura */

$this->title = 'Update Detalle Factura: ' . ' ' . $model->DFAC_id;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DFAC_id, 'url' => ['view', 'id' => $model->DFAC_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-factura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
