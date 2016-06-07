<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penalizacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penalizacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PEN_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEN_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEN_costo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
