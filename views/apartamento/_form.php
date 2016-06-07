<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Apartamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apartamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'APA_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APA_DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'piso_PIS_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
