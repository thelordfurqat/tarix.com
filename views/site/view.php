<?php

?>

<section class="home-slider owl-carousel" style="height: 100px;">
    <div class="slider-item" style="min-height: 100px;height: 100px; background-image: url('<?=Yii::$app->homeUrl?>theme/images/xiva2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay" style="height: 100px;"></div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?if(Yii::$app->language=='uz'){?>
            <div class="col-md-8 ftco-animate" id="#data">
                <h2 class="mb-3"><?=$model->title_uz?></h2>
                <p>
                    <img src="<?=Yii::$app->homeUrl?>upload/<?=$model->image?>" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3 mt-5"><?=$model->short_uz?></h2>
                <p><?=$model->body_uz?></p>

            </div>
            <?}?>
            <?if(Yii::$app->language=='ru'){?>
            <div class="col-md-8 ftco-animate" id="#data">
                <h2 class="mb-3"><?=$model->title_ru?></h2>
                <p>
                    <img src="<?=Yii::$app->homeUrl?>upload/<?=$model->image?>" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3 mt-5"><?=$model->short_ru?></h2>
                <p><?=$model->body_ru?></p>

            </div>
            <?}?>
            <?if(Yii::$app->language=='en'){?>
            <div class="col-md-8 ftco-animate" id="#data">
                <h2 class="mb-3"><?=$model->title_en?></h2>
                <p>
                    <img src="<?=Yii::$app->homeUrl?>upload/<?=$model->image?>" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3 mt-5"><?=$model->short_en?></h2>
                <p><?=$model->body_en?></p>

            </div>
            <?}?>
            <div class="col-md-4 sidebar">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3><?=getl('Kategoriyalar')?></h3>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/obidas'])?>"><?=getl('Tarixiy obidalar')?><span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'1'])->all())?>)</span></a></li>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/hukmdors'])?>"><?=getl('Hukmdorlar')?><span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'2'])->all())?>)</span></a></li>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/tradations'])?>"><?=getl('Milliy an\'analar')?> <span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'3'])->all())?>)</span></a></li>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/persons'])?>"><?=getl('Tarixiy shaxslar')?> <span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'4'])->all())?>)</span></a></li>
                    </div>
                </div>



            </div>

        </div>
    </div>
</section> <!-- .section -->

