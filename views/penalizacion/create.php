<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penalizacion */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Penalizaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Crear Penalización';
?>
<div class="penalizacion-create">

    <h1><?= Html::encode('Crear Penalización') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
