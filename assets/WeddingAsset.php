<?php
/**
 * Created by ibuildings
 * User: Paolo
 * Date: 15/04/2016
 * Time: 20:35
 */
namespace app\assets;

use yii\web\AssetBundle;

class WeddingAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/wedding';
    public $baseUrl = '@web/themes/wedding';
    public $css = [
        "http://fonts.googleapis.com/css?family=Dancing+Script:700",
        "http://fonts.googleapis.com/css?family=EB+Garamond",
        "http://fonts.googleapis.com/css?family=Raleway:900",
        "css/animate.css",
        "css/font-awesome.min.css",
        "css/colorbox.css",
        "css/style.min.css",
        "css/skin-default.min.css",
        "css/demo.css"
    ];
    public $js = [
        "js/html5shiv.min.js",
        "js/respond.min.js",
        "js/gmap3.js",
        "js/jquery.colorbox.js",
        "js/jquery.easing.js",
        "js/script.js",
        "js/demo.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
