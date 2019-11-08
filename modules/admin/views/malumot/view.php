<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Malumot */

$this->title = $model->title_uz;
$this->params['breadcrumbs'][] = ['label' => 'Malumotlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="malumot-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Taxrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'image',
                'value'=>function($d){
//                    return "<img src='/web/image/{$d->image}' onerror='this.src=;' style='width:100px;' >";
                    return "<object data='/web/upload/{$d->image}' type='image/png' style='width: 200px'><img src='/web/upload/avatar.jpg' style='width:100px;'></object>";

                },
                'filter'=>false,
                'format'=>'raw'
            ],
                'id',
            'title_uz',
            'title_ru',
            'title_en',
            'short_uz',
            'short_ru',
            'short_en',
            'body_uz:ntext',
            'body_ru:ntext',
            'body_en',
//            'image',
            'date',
            [
                'attribute'=>'type_id',
                'value'=>function($x){return $x->type->title_uz;}
            ],
//            'type_id',
        ],
    ]) ?>

</div>
