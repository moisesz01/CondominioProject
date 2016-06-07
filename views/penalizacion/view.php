<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penalizacion */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Penalizaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->PEN_id;
?>
<div class="penalizacion-view">

    <h1><?= Html::encode('Datos de Penalización') ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->PEN_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->PEN_id], [
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
            'PEN_id',
            'PEN_nombre',
            'PEN_descripcion',
            'PEN_costo',
        ],
    ]) ?>

</div>
