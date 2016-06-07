<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PagoExtraordinario */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pago Extraordinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Datos del Pago Extraordinario';
?>
<div class="pago-extraordinario-view">

    <h1><?= Html::encode('Datos del Pago Extraordinario') ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->PEX_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->PEX_id], [
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
            'PEX_id',
            'PEX_nombre',
            'PEX_descripcion',
            'PEX_fecha',
        ],
    ]) ?>

</div>
