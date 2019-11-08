<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MalumotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Malumotlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="malumot-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ma\'lumot qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'image',
                'value'=>function($d){
//                    return "<img src='/web/image/{$d->image}' onerror='this.src=;' style='width:100px;' >";
                    return "<object data='/web/upload/{$d->image}' type='image/png' style='width: 100px'><img src='/web/upload/avatar.jpg' style='width:100px;'></object>";

                },
                'filter'=>false,
                'format'=>'raw'
            ],
//            'id',
            'title_uz',
//            'title_ru',
//            'title_en',
//            'short_uz',
            //'short_ru',
            //'short_en',
            //'body_uz:ntext',
            //'body_ru:ntext',
            //'body_en',
            //'date',
            [
                'attribute'=>'type_id',
                'value'=>function($x){return $x->type->title_uz;}
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
