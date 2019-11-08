<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\MalumotSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="malumot-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'short_uz') ?>

    <?php // echo $form->field($model, 'short_ru') ?>

    <?php // echo $form->field($model, 'short_en') ?>

    <?php // echo $form->field($model, 'body_uz') ?>

    <?php // echo $form->field($model, 'body_ru') ?>

    <?php // echo $form->field($model, 'body_en') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
