<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PagoOrdinario */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pago Ordinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->PSA_id;
?>
<div class="pago-ordinario-view">

    <h1><?= Html::encode('Pago Ordinario') ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->PSA_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->PSA_id], [
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
            'PSA_id',
            'PSA_nombre',
            'PSA_descripcion',
            'PSA_costo',
        ],
    ]) ?>

</div>
