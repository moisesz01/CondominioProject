<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MOR_id') ?>

    <?= $form->field($model, 'MOR_mes') ?>

    <?= $form->field($model, 'MOR_numdias') ?>

    <?= $form->field($model, 'cliente_CLI_cedula') ?>

    <?= $form->field($model, 'penalizacion_PEN_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
