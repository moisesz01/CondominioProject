<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mora */

$this->title = 'Update Mora: ' . ' ' . $model->MOR_id;
$this->params['breadcrumbs'][] = ['label' => 'Moras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MOR_id, 'url' => ['view', 'id' => $model->MOR_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
