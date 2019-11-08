<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Type */

$this->title = 'Turlar';
$this->params['breadcrumbs'][] = ['label' => 'Turlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
