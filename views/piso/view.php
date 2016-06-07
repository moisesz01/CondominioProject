<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Piso */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="piso-view">

    <h1><?= Html::encode('Datos del Piso:') ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea eliminar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'PIS_nombre',
            'PIS_descripcion',
            'edificio_EDI_id',
        ],
    ]) ?>

    <h2>Apartamentos del Piso</h2>

    <table class="table table-striped table-bordered" style="text-align:center;">
        <tr>
          <td><strong>Dueño del Apartamento</strong></td>
          <td><strong>Nombre del Apartamento</strong></td>
          <td><strong>Descripción del Apartamento</strong></td>
          
          
        </tr>
         <?php foreach ($modelsApartamento as $value):?>
            <tr>
                <td>
                  <?php 
                    $user = User::find()->where(['id'=>$value['user_id']])->one();
                    echo $user->username;
                  ?>
                </td>
                <td><?=$value['APA_NOMBRE']?></td>
              
                <td>
                    <?= $value['APA_DESCRIPCION']?>  
                </td>
              
            </tr>
        <?php endforeach;?>
    </table>

</div>
