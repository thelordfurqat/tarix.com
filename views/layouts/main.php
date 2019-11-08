<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\FrontAsset;

FrontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" style="font-weight: bold; font-size: 2rem" href="<?=Yii::$app->homeUrl?>site/index">TURIST.UZ </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?=Yii::$app->homeUrl==Yii::$app->request->url ? 'active' : ''?>"><a href="<?=Yii::$app->homeUrl?>site/index" class="nav-link"><?=getl('Bosh sahifa')?></a></li>
                <li class="nav-item <?=Yii::$app->urlManager->createUrl(['site/obidas'])==Yii::$app->request->url ? 'active' : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/obidas'])?>" class="nav-link"><?=getl('Tarixiy obidalar')?></a></li>
                <li class="nav-item <?=Yii::$app->urlManager->createUrl(['site/hukmdors'])==Yii::$app->request->url ? 'active' : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/hukmdors'])?>" class="nav-link"><?=getl('Hukmdorlar')?></a></li>
                <li class="nav-item <?=Yii::$app->urlManager->createUrl(['site/tradations'])==Yii::$app->request->url ? 'active' : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/tradations'])?>" class="nav-link"><?=getl('Milliy an\'analar')?></a></li>
                <li class="nav-item <?=Yii::$app->urlManager->createUrl(['site/persons'])==Yii::$app->request->url ? 'active' : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/persons'])?>" class="nav-link"><?=getl('Tarixiy shaxslar')?></a></li>
                <li class="nav-item <?=Yii::$app->urlManager->createUrl(['site/about'])==Yii::$app->request->url ? 'active' : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/about'])?>" class="nav-link"><?=getl('Biz haqimizda')?></a></li>

            </ul>

        </div>



    </div>
    <div class="pull-right">
        <ul class="languagepicker roundborders large" style="width: 100%">
            <?if($this->context->action->id!='view'){?>
            <?if (Yii::$app->language=='uz'){?>
            <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'uz'])?>"><li ><img src="<?=Yii::$app->homeUrl?>upload/uzb.png"/>O'zbek</li></a>
            <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'ru'])?>"><li class="active"><img src="<?=Yii::$app->homeUrl?>upload/rus.png"/>Русский</li></a>
            <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'en'])?>"><li><img src="<?=Yii::$app->homeUrl?>upload/usa.png"/>English</li></a>
            <?}?>
            <? if (Yii::$app->language=='ru'){?>
                <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'ru'])?>"><li class="active"><img src="<?=Yii::$app->homeUrl?>upload/rus.png"/>Русский</li></a>
                <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'uz'])?>"><li ><img src="<?=Yii::$app->homeUrl?>upload/uzb.png"/>O'zbek</li></a>
                <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'en'])?>"><li><img src="<?=Yii::$app->homeUrl?>upload/usa.png"/>English</li></a>
            <?}?>
            <?if (Yii::$app->language=='en'){?>
                <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'en'])?>"><li><img src="<?=Yii::$app->homeUrl?>upload/usa.png"/>English</li></a>
                <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'uz'])?>"><li ><img src="<?=Yii::$app->homeUrl?>upload/uzb.png"/>O'zbek</li></a>
                <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'language'=>'ru'])?>"><li class="active"><img src="<?=Yii::$app->homeUrl?>upload/rus.png"/>Русский</li></a>
            <?}?>
            <?}else{
                $id=1;
                if(Yii::$app->request->get('id'))
                    $id=Yii::$app->request->get('id');
                ?>
                <?if (Yii::$app->language=='uz'){?>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'uz'])?>"><li ><img src="<?=Yii::$app->homeUrl?>upload/uzb.png"/>O'zbek</li></a>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'ru'])?>"><li class="active"><img src="<?=Yii::$app->homeUrl?>upload/rus.png"/>Русский</li></a>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'en'])?>"><li><img src="<?=Yii::$app->homeUrl?>upload/usa.png"/>English</li></a>
                <?}?>
                <? if (Yii::$app->language=='ru'){?>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'ru'])?>"><li class="active"><img src="<?=Yii::$app->homeUrl?>upload/rus.png"/>Русский</li></a>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'uz'])?>"><li ><img src="<?=Yii::$app->homeUrl?>upload/uzb.png"/>O'zbek</li></a>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'en'])?>"><li><img src="<?=Yii::$app->homeUrl?>upload/usa.png"/>English</li></a>
                <?}?>
                <?if (Yii::$app->language=='en'){?>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'en'])?>"><li><img src="<?=Yii::$app->homeUrl?>upload/usa.png"/>English</li></a>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'uz'])?>"><li ><img src="<?=Yii::$app->homeUrl?>upload/uzb.png"/>O'zbek</li></a>
                    <a href="<?=\yii\helpers\Url::to(['/site/'.$this->context->action->id,'id'=>$id,'language'=>'ru'])?>"><li class="active"><img src="<?=Yii::$app->homeUrl?>upload/rus.png"/>Русский</li></a>
                <?}?>
            <?}?>
        </ul>
    </div>
</nav>

<?=$content?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This project is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://ubtuit.uz" target="_blank">student of UBTUIT</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

            </div>

        </div>
    </div>
</footer>
<!--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
