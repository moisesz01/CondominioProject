<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetalleFacturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-factura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DFAC_id') ?>

    <?= $form->field($model, 'DFAC') ?>

    <?= $form->field($model, 'factura_FAC_id') ?>

    <?= $form->field($model, 'pagoOrdinario_PSA_id') ?>

    <?= $form->field($model, 'pagoExtraordinario_PEX_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
