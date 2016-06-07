<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModoPago */

$this->title = 'Create Modo Pago';
$this->params['breadcrumbs'][] = ['label' => 'Modo Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modo-pago-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
