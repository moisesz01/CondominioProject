<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PagoExtraordinario */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pago Extraordinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PEX_id, 'url' => ['view', 'id' => $model->PEX_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="pago-extraordinario-update">

    <h1><?= Html::encode('Actualizar Pago Extraordinario: ' . ' ' . $model->PEX_id) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
