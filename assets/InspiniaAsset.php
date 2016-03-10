<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class InspiniaAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/inspinia';
    public $baseUrl = '@web/themes/inspinia';
    public $css = [
        "css/bootstrap.min.css",
        "css/animate.min.css",
        "font-awesome/css/font-awesome.min.css",
        "css/style.css"
    ];
    public $js = [
        "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js",
        "https://oss.maxcdn.com/respond/1.4.2/respond.min.js",
        "js/jquery-2.1.1.js",
        "js/pace.min.js",
        "js/bootstrap.min.js",
        "js/classie.js",
        "js/cbpAnimatedHeader.js",
        "js/wow.min.js",
        "js/inspinia.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
