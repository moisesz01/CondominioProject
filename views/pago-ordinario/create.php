<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PagoOrdinario */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pago Ordinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Crear Pago Ordinario';
?>
<div class="pago-ordinario-create">

    <h1><?= Html::encode('Crear Pago Ordinario') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
