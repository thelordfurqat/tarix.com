<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('<?=Yii::$app->homeUrl?>theme/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?=Yii::$app->homeUrl?>"><?=getl('Bosh sahifa')?></a></span> <span><?=getl('Biz haqimizda')?></span></p>
                    <h1 class="mb-3"><?=getl('Biz haqimizda')?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row block-9 mb-4">
            <div class="col-md-6 pr-md-5 flex-column">
                <div class="row d-block flex-row">
                    <h2 class="h4 mb-4"><?=getl('Biz haqimizda')?></h2>
                    <div class="col mb-3 d-flex py-4 border" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span><?=getl('Address')?>:</span> <?=getl('Urganch. Al-Xorazmiy ko\'cha. 110-uy')?></p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex py-4 border" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span><?=getl('Telefon')?>:</span> <a href="tel://+998999671042">+998 99 967 10 42</a></p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex py-4 border" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Email:</span> <a href="mailto:info@ubtuit.com">info@ubtuit.com</a></p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex py-4 border" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span><?=getl('Web sahifa')?></span> <a href="http://www.ubtuit.uz/">ubtuit.uz</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-4 ftco-animate fadeInUp ftco-animated">
                <a href="http://www.ubtuit.uz/" class="block-5" style="background-image: url('<?=Yii::$app->homeUrl?>theme/images/tatu15.jpg');">
                    <div class="text">
                        <h3 class="heading"><?=getl('Muhammad al-Xorazmiy nomidagi')?></h3>
                        <div class="post-meta">
                            <span><?=getl('Toshkent axborot texnalogiyalari universiteti Urganch filiali')?></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>