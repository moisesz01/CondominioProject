<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\ArrayHelper;
use app\models\Edificio;
use app\models\User;
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <div class="row">
        <div class="col-sm-6">
            

            <?=$form->field($modelPiso, "edificio_EDI_id")->dropDownList(
                ArrayHelper::map(Edificio::find()->all(),'EDI_id','EDI_nombre'),
                ['prompt'=>'Seleccione Edificio...']); 
            ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($modelPiso, 'PIS_nombre')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
    		<?= $form->field($modelPiso, 'PIS_descripcion')->textInput(['maxlength' => true]) ?>		
    	</div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-home"></i> Apartamentos</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsApartamento[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'full_name',
                    'address_line1',
                    'address_line2',
                    'city',
                    'state',
                    'postal_code',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsApartamento as $i => $modelApartamento): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Apartamento</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelApartamento->isNewRecord) {
                                echo Html::activeHiddenInput($modelApartamento, "[{$i}]id");
                            }
                        ?>
                        
                        <div class="row">
                            <div class="col-sm-6">
                            	<?=$form->field($modelApartamento, "[{$i}]user_id")->dropDownList(
                                    ArrayHelper::map(User::find()->all(),'id','username'),
                                    ['prompt'=>'Seleccione Dueño...']); 
                                ?>                                
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelApartamento, "[{$i}]APA_NOMBRE")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                        	<div class="col-sm-12">
                        		<?= $form->field($modelApartamento, "[{$i}]APA_DESCRIPCION")->textInput(['maxlength' => true]) ?>
                        	</div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($modelApartamento->isNewRecord ? 'Crear' : 'Actualizar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>