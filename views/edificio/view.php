<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Edificio */

$this->title ='';
$this->params['breadcrumbs'][] = ['label' => 'Edificios', 'url' => ['index']];
$this->params['breadcrumbs'][] =  $model->EDI_id;
?>
<div class="edificio-view">

    <h1><?= Html::encode('Datos del Edificio:') ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->EDI_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->EDI_id], [
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
            'EDI_id',
            'EDI_nombre',
            'EDI_descripcion',
        ],
    ]) ?>

</div>
