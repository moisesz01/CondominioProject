<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Piso */

$this->title = 'Create Piso';
$this->params['breadcrumbs'][] = ['label' => 'Pisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="piso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'modelPiso' => $modelPiso,
        'modelsApartamento' => (empty($modelsApartamento)) ? [new Apartamento] : $modelsApartamento
    ]) ?>

</div>
