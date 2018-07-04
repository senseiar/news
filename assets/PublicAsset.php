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
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/subscribe-better.css',
        'public/css/bootstrap.min.css',
        'public/css/font-awesome.min.css',
        'public/css/animate.min.css',
        'public/css/owl.carousel.css',
        'public/css/owl.theme.css',
        'public/css/owl.transitions.css',
        'public/css/style.css',
        'public/css/responsive.css',
    ];
    public $js = [
        "https://code.jquery.com/jquery-2.2.1.js",
        "public/js/jquery.subscribe-better.js",
        "public/js/scripts.js",
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js",
        //"public/js/menu.js",
        "public/js/owl.carousel.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
