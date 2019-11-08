<?php

?>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('<?=Yii::$app->homeUrl?>theme/images/xiva1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?=Yii::$app->homeUrl?>"><?=getl('Bosh sahifa')?></a></span> <span><?=getl('Tarixiy obidalar')?></span></p>
                    <h1 class="mb-3"><?=getl('Tarixiy obidalar')?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <? foreach ($model as $item) {?>
                        <?if(Yii::$app->language=='uz'){?>
                    <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                            <div class="text">
                                <h3 class="heading"><?=$item->title_uz?></h3>
                                <div class="post-meta">
                                    <span><?=$item->short_uz?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?}?>
                        <?if(Yii::$app->language=='ru'){?>
                    <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                            <div class="text">
                                <h3 class="heading"><?=$item->title_ru?></h3>
                                <div class="post-meta">
                                    <span><?=$item->short_ru?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?}?>
                        <?if(Yii::$app->language=='en'){?>
                    <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                            <div class="text">
                                <h3 class="heading"><?=$item->title_en?></h3>
                                <div class="post-meta">
                                    <span><?=$item->short_en?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?}?>
                    <?}?>
                </div>

            </div>
            <!-- END -->

            <div class="col-lg-4 sidebar">


                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3><?=getl('Kategoriyalar')?></h3>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/obidas'])?>"><?=getl('Tarixiy obidalar')?><span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'1'])->all())?>)</span></a></li>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/hukmdors'])?>"><?=getl('Hukmdorlar')?><span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'2'])->all())?>)</span></a></li>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/tradations'])?>"><?=getl('Milliy an\'analar')?> <span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'3'])->all())?>)</span></a></li>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/persons'])?>"><?=getl('Tarixiy shaxslar')?> <span>(<?=sizeof(\app\models\Malumot::find()->where(['type_id'=>'4'])->all())?>)</span></a></li>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3><?=getl('Tarixiy obidalar')?></h3>
                    <p><?=getl('O\'zbekistonda joylashgan tarixiy obidalar- o\'zining qadimiyligi, betakror go\'zalliklari bilan ajralib turadi.
                        Bu manzilgohlar o\'tmishdan so\'zlashi bilan bir qatorda, insonda ajabtovur hissiyotlarni uyg\'otadi.')?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

