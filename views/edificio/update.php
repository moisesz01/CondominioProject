<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Edificio */

$this->title = 'Update Edificio: ' . ' ' . $model->EDI_id;
$this->params['breadcrumbs'][] = ['label' => 'Edificios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EDI_id, 'url' => ['view', 'id' => $model->EDI_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="edificio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
