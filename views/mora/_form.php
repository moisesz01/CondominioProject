<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MOR_mes')->textInput() ?>

    <?= $form->field($model, 'MOR_numdias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente_CLI_cedula')->textInput() ?>

    <?= $form->field($model, 'penalizacion_PEN_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
