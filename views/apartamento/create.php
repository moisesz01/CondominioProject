<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Apartamento */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartamento-create">

    <h1><?= Html::encode("Crear Apartamento") ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
