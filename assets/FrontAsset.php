<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/css/all.css',
        'theme/css/open-iconic-bootstrap.min.css',
        'theme/css/animate.css',
        'theme/css/owl.carousel.min.css',
        'theme/css/owl.theme.default.min.css',
        'theme/css/magnific-popup.css',
        'theme/css/aos.css',
        'theme/css/ionicons.min.css',
        'theme/css/bootstrap-datepicker.css',
        'theme/css/jquery.timepicker.css',
        'theme/css/flaticon.css',
        'theme/css/icomoon.css',
        'theme/css/style.css',

    ];
    public $js = [
        'theme/js/jquery.min.js',
        'theme/js/jquery-migrate-3.0.1.min.js',
        'theme/js/popper.min.js',
        'theme/js/bootstrap.min.js',
        'theme/js/jquery.easing.1.3.js',
        'theme/js/jquery.waypoints.min.js',
        'theme/js/jquery.stellar.min.js',
        'theme/js/owl.carousel.min.js',
        'theme/js/jquery.magnific-popup.min.js',
        'theme/js/aos.js',
        'theme/js/jquery.animateNumber.min.js',
        'theme/js/bootstrap-datepicker.js',
        'theme/js/jquery.timepicker.min.js',
//        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',
//        'theme/js/google-map.js',
        'theme/js/main.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
