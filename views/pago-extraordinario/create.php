<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PagoExtraordinario */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pago Extraordinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Crear Pago Extraordinario';
?>
<div class="pago-extraordinario-create">

    <h1><?= Html::encode('Crear Pago Extraordinario') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
