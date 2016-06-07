<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModoPago */

$this->title = 'Update Modo Pago: ' . ' ' . $model->MPA_id;
$this->params['breadcrumbs'][] = ['label' => 'Modo Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MPA_id, 'url' => ['view', 'id' => $model->MPA_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modo-pago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
