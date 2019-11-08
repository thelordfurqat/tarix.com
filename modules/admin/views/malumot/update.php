<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Malumot */

$this->title = 'Taxrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Malumotlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Taxrirlash';
?>
<div class="malumot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
