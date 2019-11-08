<?php

use app\models\Malumot;
$obidalar=Malumot::find()->where(['type_id'=>'1'])->all();
$hukmdors=Malumot::find()->where(['type_id'=>'2'])->all();
$persons=Malumot::find()->where(['type_id'=>'3'])->all();
$ananas=Malumot::find()->where(['type_id'=>'4'])->all();
$lan=Yii::$app->language;
?>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('<?=Yii::$app->homeUrl?>theme/images/xiva2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <h1 class="mb-3"><?=getl('Eng so\'lim joylarga sayohat qiling')?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('<?=Yii::$app->homeUrl?>theme/images/xiva1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <h1 class="mb-3"><?=getl('Ta\'tilingizni mazmunli o\'tkazing')?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('<?=Yii::$app->homeUrl?>theme/images/xiva3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <h1 class="mb-3"><?=getl('Tarixiy joylarga sayohat qiling')?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-section-2">
    <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
            <div class="img col-sm-12 col-lg-6" style="background-image: url('<?=Yii::$app->homeUrl?>upload/V-048.jpg');">
                <a href="https://www.youtube.com/watch?v=BsyEH6gzZcE" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
            </div>
<!--            --><?//=Yii::$app->homeUrl?><!--upload/back.webm-->
            <div class="text col-lg-6 ftco-animate">
                <div class="text-inner align-self-start">

                    <h3><?=getl('O’zbekistonga xush kelibsiz!')?></h3>
                    <p><?=getl('O\'zbekiston - Buyuk Ipak yo\'lining yuragi, qadimiy shaharlar yerlari - qadimgi sivilizatsiyalar markazlari, noyob me\'moriy yodgorliklar, noyob landshaftlar va tabiiy go\'zallik!')?></p>

                    <p><?=getl('Turizmni rivojlantirish davlat qo’mitasi va uning mintaqaviy tuzilmalari shtat birliklari oshirildi, hududlarda turizm departamentlari hamda boshqarmalari, hokim o’rinbosarlari lavozimlari tashkil etilgani mazkur tashkilotlarning imkoniyatlarini yanada kengaytirdi. Sayyohlar oqimini
                        ko’paytirish bo’yicha 39 mamlakat fuqarolariga viza berish tartibi soddalashtirildi.')?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2><?=getl('Tarixiy hukmdorlar haykallari')?></h2>
            </div>
        </div>
        <div class="row">
        <? foreach ($hukmdors as $item) {?>
            <?if($lan=='uz'){?>
            <div class="col-lg-3 promo ftco-animate">
                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="promo-img mb-4" style="background-image: url(<?=Yii::$app->homeUrl?>upload/<?=$item->image?>);"></a>
                <div class="text text-center">
                    <h2><?=$item->title_uz?></h2>
                    <h3 class="price"><?=substr($item->short_uz,0,40)?></h3>
                    <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="read"><?=getl('Batafsil')?></a>
                </div>
            </div>
                <?}?>
            <?if($lan=='ru'){?>
            <div class="col-lg-3 promo ftco-animate">
                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="promo-img mb-4" style="background-image: url(<?=Yii::$app->homeUrl?>upload/<?=$item->image?>);"></a>
                <div class="text text-center">
                    <h2><?=$item->title_ru?></h2>
                    <h3 class="price"><?=substr($item->short_ru,0,40)?></h3>
                    <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="read"><?=getl('Batafsil')?></a>
                </div>
            </div>
                <?}?>
            <?if($lan=='en'){?>
            <div class="col-lg-3 promo ftco-animate">
                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="promo-img mb-4" style="background-image: url(<?=Yii::$app->homeUrl?>upload/<?=$item->image?>);"></a>
                <div class="text text-center">
                    <h2><?=$item->title_en?></h2>
                    <h3 class="price"><?=substr($item->short_en,0,40)?></h3>
                    <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="read"><?=getl('Batafsil')?></a>
                </div>
            </div>
                <?}?>
        <?}?>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
            <div class="col-md-7 text-center heading-section">
                <h2><?=getl('Ommabop ziyoratgohlar')?></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <? foreach ($obidalar as $item) {?>
                <?if($lan=='uz'){?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                    <div class="text">
<!--                        <span class="price">$399</span>-->
                        <h3 class="heading"><?=$item->title_uz?></h3>
                        <div class="post-meta">
                            <span><?=$item->short_uz?></span>
                        </div>
                    </div>
                </a>
            </div>
                    <?}?>
                <?if($lan=='ru'){?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                    <div class="text">
<!--                        <span class="price">$399</span>-->
                        <h3 class="heading"><?=$item->title_ru?></h3>
                        <div class="post-meta">
                            <span><?=$item->short_ru?></span>
                        </div>
                    </div>
                </a>
            </div>
                    <?}?>
                <?if($lan=='en'){?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                    <div class="text">
<!--                        <span class="price">$399</span>-->
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
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2><?=getl('Buyuk shaxslar')?></h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="carousel owl-carousel ftco-owl">
                <? foreach ($persons as $item) {?>
                    <?if($lan=='uz'){?>
                    <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>">

                    <div class="item text-center">
                    <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(<?=Yii::$app->homeUrl?>upload/<?=$item->image?>);border: 1px solid red;"></div>
                        <div class="text">
                            <p class="mb-5" style="color: #0b0b0b"><?=$item->short_uz?></p>
                            <p class="name"><?=$item->title_uz?></p>
                        </div>
                    </div>
                </div>
                    </a>
                        <?}?>
                    <?if($lan=='ru'){?>
                    <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>">

                    <div class="item text-center">
                    <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(<?=Yii::$app->homeUrl?>upload/<?=$item->image?>);border: 1px solid red;"></div>
                        <div class="text">
                            <p class="mb-5" style="color: #0b0b0b"><?=$item->short_ru?></p>
                            <p class="name"><?=$item->title_ru?></p>
                        </div>
                    </div>
                </div>
                    </a>
                        <?}?>
                    <?if($lan=='en'){?>
                    <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>">

                    <div class="item text-center">
                    <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(<?=Yii::$app->homeUrl?>upload/<?=$item->image?>);border: 1px solid red;"></div>
                        <div class="text">
                            <p class="mb-5" style="color: #0b0b0b"><?=$item->short_en?></p>
                            <p class="name"><?=$item->title_en?></p>
                        </div>
                    </div>
                </div>
                    </a>
                        <?}?>
                <?}?>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container-fluid">
        <div class="row mb-5 pb-5 no-gutters">
            <div class="col-lg-4 bg-light p-3 p-md-5 d-flex align-items-center heading-section ftco-animate">
                <div>
                    <h2 class="mb-5 pb-3"><?=getl('Bu qadimiy obidalar o\'tmishdan so\'zlashi bilan bir qatorda o\'zining jozibisi bilan sizni lol qoldiradi. Hoziroq ko\'ring')?></h2>
                </div>
            </div>
            <div class="col-lg-8 p-2 pl-md-5 heading-section">
                <h2 class="mb-5 p-2 pb-3 ftco-animate"><?=getl('Eng ko\'p tashrif buyuriladiganlar manzillar')?></h2>
                <div class="row no-gutters d-flex">
                    <? \yii\helpers\ArrayHelper::multisort($obidalar,['id'],[SORT_DESC]);
                    foreach ($obidalar as $i=>$item) {
                        if($i>=3) break;
                        ?>
                        <?if($lan=='uz'){?>
                        <div class="col-md-4 ftco-animate">
                            <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                                <div class="text">
                                    <!--                        <span class="price">$399</span>-->
                                    <h3 class="heading"><?=$item->title_uz?></h3>
                                    <div class="post-meta">
                                        <span><?=$item->short_uz?></span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                    <?}?><?if($lan=='ru'){?>
                        <div class="col-md-4 ftco-animate">
                            <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                                <div class="text">
                                    <!--                        <span class="price">$399</span>-->
                                    <h3 class="heading"><?=$item->title_ru?></h3>
                                    <div class="post-meta">
                                        <span><?=$item->short_ru?></span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                    <?}?><?if($lan=='en'){?>
                        <div class="col-md-4 ftco-animate">
                            <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                                <div class="text">
                                    <!--                        <span class="price">$399</span>-->
                                    <h3 class="heading"><?=$item->title_en?></h3>
                                    <div class="post-meta">
                                        <span><?=$item->short_en?></span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                    <?}?>
                    <?}?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2><?=getl('Milliy an\'analar')?></h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="carousel1 owl-carousel ftco-owl">
                <?foreach ($ananas as $item) {?>
                    <?if($lan=='uz'){?>
                <div class="item">
                    <div class="blog-entry">
                        <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-20" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                        </a>
                        <div class="text p-4">
                            <div class="meta">
                                <div><a href=""><i class="fa fa-clock"></i> <?=$item->date?></a></div>
                            </div>
                            <h3 class="heading"><a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>"><?=$item->title_uz?></a></h3>
                            <p><?=$item->short_uz?></p>
                            <p class="clearfix">
                                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="float-left"><?=getl('Batafsil')?></a>
                            </p>
                        </div>
                    </div>
                </div>
              <?}?>
                    <?if($lan=='ru'){?>
                <div class="item">
                    <div class="blog-entry">
                        <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-20" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                        </a>
                        <div class="text p-4">
                            <div class="meta">
                                <div><a href=""><i class="fa fa-clock"></i> <?=$item->date?></a></div>
                            </div>
                            <h3 class="heading"><a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>"><?=$item->title_ru?></a></h3>
                            <p><?=$item->short_ru?></p>
                            <p class="clearfix">
                                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="float-left"><?=getl('Batafsil')?></a>
                            </p>
                        </div>
                    </div>
                </div>
              <?}?>
                    <?if($lan=='en'){?>
                <div class="item">
                    <div class="blog-entry">
                        <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="block-20" style="background-image: url('<?=Yii::$app->homeUrl?>upload/<?=$item->image?>');">
                        </a>
                        <div class="text p-4">
                            <div class="meta">
                                <div><a href=""><i class="fa fa-clock"></i> <?=$item->date?></a></div>
                            </div>
                            <h3 class="heading"><a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>"><?=$item->title_en?></a></h3>
                            <p><?=$item->short_en?></p>
                            <p class="clearfix">
                                <a href="<?=Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="float-left"><?=getl('Batafsil')?></a>
                            </p>
                        </div>
                    </div>
                </div>
              <?}?>
              <?}?>
            </div>
        </div>
    </div>
</section>