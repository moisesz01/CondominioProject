<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Piso */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $modelPiso->id, 'url' => ['view', 'id' => $modelPiso->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="piso-update">

    <h1><?= Html::encode('Actualizar Piso: ' . ' ' . $modelPiso->id) ?></h1>

    <?= $this->render('_form', [
        'modelPiso' => $modelPiso,
         'modelsApartamento' => (empty($modelsApartamento)) ? [new Apartamento] : $modelsApartamento
    ]) ?>

</div>
