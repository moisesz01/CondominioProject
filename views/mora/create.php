<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mora */

$this->title = 'Create Mora';
$this->params['breadcrumbs'][] = ['label' => 'Moras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
