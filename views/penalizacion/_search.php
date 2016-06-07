<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenalizacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penalizacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PEN_id') ?>

    <?= $form->field($model, 'PEN_nombre') ?>

    <?= $form->field($model, 'PEN_descripcion') ?>

    <?= $form->field($model, 'PEN_costo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
