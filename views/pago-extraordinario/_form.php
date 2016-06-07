<?php



use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\PagoExtraordinario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-extraordinario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PEX_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEX_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEX_fecha')->widget(DatePicker::classname(), [
        //'convertFormat' => true,
	    'options' => ['placeholder' => 'Ingrese mes...'],
	    'pluginOptions' => [
            'convertFormat' => true,
	        'autoclose'=>true,
	        'format' => 'M-yyyy',
	    ]
	]);?>
	<?= $form->field($model, 'PEX_costo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
