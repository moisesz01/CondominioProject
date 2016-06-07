<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penalizacion */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Penalizaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PEN_id, 'url' => ['view', 'id' => $model->PEN_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="penalizacion-update">

    <h1><?= Html::encode('Actualizar Penalizacion: ' . ' ' . $model->PEN_id) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
