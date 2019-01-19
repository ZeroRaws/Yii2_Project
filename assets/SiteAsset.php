<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "site/css/bootstrap.min.css",
        "site/css/font-awesome.min.css",
        "site/css/animate.min.css",
        "site/css/owl.carousel.css",
        "site/css/owl.theme.css",
        "site/css/owl.transitions.css",
        "site/css/style.css",
        "site/css/responsive.css",
    ];
    public $js = [
        //"site/js/jquery-1.11.3.min.js",
        "site/js/bootstrap.min.js",
        "site/js/owl.carousel.min.js",
        "site/js/jquery.stickit.min.js",
        "site/js/menu.js",
        "site/js/scripts.js",
    ];
    public $jsOptions = [];
    public $depends = [

    ];
}
