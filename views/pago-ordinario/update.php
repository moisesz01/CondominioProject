<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PagoOrdinario */

$this->title = 'Actualizar Pago Ordinario: ' . ' ' . $model->PSA_id;
$this->params['breadcrumbs'][] = ['label' => 'Pago Ordinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PSA_id, 'url' => ['view', 'id' => $model->PSA_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pago-ordinario-update">

    <h1><?= Html::encode('Actualizar Pago Ordinario: ' . ' ' . $model->PSA_id) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
