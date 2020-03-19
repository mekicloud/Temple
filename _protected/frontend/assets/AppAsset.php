<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        'css/all.min.css',
        'css/bootstrap.min.css',
       // 'css/aos.css',
        'css/bootstrap-datepicker.css',
        'css/jquery.fancybox.min.css',
        'css/jquery.mb.YTPlayer.min.css',
        'css/jquery-ui.css',
        'css/magnific-popup.css',
        'css/mediaelementplayer.css',
        'css/fontawesome.min.css',
        'css/flaticon.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/style.css',
    ];
    public $js = [
         //'js/aos.js',
        'js/all.min.js',
        // 'js/jquery-3.3.1.min.js',
         'js/jquery-migrate-3.0.1.min.js',
        'js/jquery-ui.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.countdown.min.js',
        'js/bootstrap-datepicker.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.fancybox.min.js',
        'js/jquery.sticky.js',
        'js/jquery.mb.YTPlayer.min.js',
        'js/main.js',

        
        
        
        
        
     
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

