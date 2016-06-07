<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Piso */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Crear Piso';
?>
<div class="piso-create">

    <h1><?= Html::encode('Crear Piso') ?></h1>

    <?= $this->render('_form', [
        'modelPiso' => $modelPiso,
        'modelsApartamento' => (empty($modelsApartamento)) ? [new Apartamento] : $modelsApartamento
    ]) ?>

</div>
