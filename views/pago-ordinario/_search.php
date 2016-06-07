<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PagoOrdinarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-ordinario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PSA_id') ?>

    <?= $form->field($model, 'PSA_nombre') ?>

    <?= $form->field($model, 'PSA_descripcion') ?>

    <?= $form->field($model, 'PSA_costo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
