<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Type */

$this->title = 'Taxrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'turlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Taxrirlash';
?>
<div class="type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
