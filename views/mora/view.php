<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mora */

$this->title = $model->MOR_id;
$this->params['breadcrumbs'][] = ['label' => 'Moras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MOR_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MOR_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MOR_id',
            'MOR_mes',
            'MOR_numdias',
            'cliente_CLI_cedula',
            'penalizacion_PEN_id',
        ],
    ]) ?>

</div>
