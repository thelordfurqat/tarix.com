<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Malumot */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="malumot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'body_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'body_en')->textarea(['rows' => 6]) ?>


    <label for="add-pic" class="add-pic-label">
<!--        <label class="bmd-label-floating">Avatar</label>-->
        <img id="blah" src="<?= Yii::$app->homeUrl?>upload/<?=$model->image ? $model->image : 'icon-camera.png'?>" alt="your image" class="add-image"/>
        <?= $form->field($model, 'image')->fileInput(['onchange'=>'readURL(this)','id'=>'add-pic','accept'=>'image/*'])->label('',['style'=>'display:none']) ?>
        <!--        <input type='file' onchange="readURL(this);" id="add-pic" accept="image/*"/>-->
    </label>

    <? $model->date=date('y-m-d H-i-s') ?>

    <?= $form->field($model, 'date')->textInput() ?>
    <?= $form->field($model, 'type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(),'id','title_uz')) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>