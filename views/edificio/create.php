<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Edificio */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Edificios', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Crear Edificio';
?>
<div class="edificio-create">

    <h1><?= Html::encode('Crear Edificio') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
