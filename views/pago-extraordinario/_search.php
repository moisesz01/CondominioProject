<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PagoExtraordinarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-extraordinario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PEX_id') ?>

    <?= $form->field($model, 'PEX_nombre') ?>

    <?= $form->field($model, 'PEX_descripcion') ?>

    <?= $form->field($model, 'PEX_fecha') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
