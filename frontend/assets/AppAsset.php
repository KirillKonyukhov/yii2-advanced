<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/flexslider.css',
        'css/bootstrap.css',
        'css/style.css',
        'css/font-awesome.css',
        'css/main.css',
    ];
    public $js = [
        'js/jquery.flexslider.js',
        'js/waypoints.min.js',
        'js/counterup.min.js',
        'js/simplePlayer.js',
        'js/SmoothScroll.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
