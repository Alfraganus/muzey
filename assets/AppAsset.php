<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $css = [
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        '/lib/animate/animate.min.css',
        '/lib/lightbox/css/lightbox.min.css',
        '/lib/owlcarousel/assets/owl.carousel.min.css',
        '/css/bootstrap.min.css',
        '/css/style.css',
    ];
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'https://code.jquery.com/jquery-3.4.1.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
        '/lib/wow/wow.min.js',
        '/lib/easing/easing.min.js',
        '/lib/waypoints/waypoints.min.js',
        '/lib/counterup/counterup.min.js',
        '/lib/owlcarousel/owl.carousel.min.js',
        '/lib/lightbox/js/lightbox.min.js',
        '/js/main.js',

        ];


    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset'
    ];
}
