<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace backend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 *
 * Customized by Nenad Živković
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        'assets/vendor/bootstrap/css/bootstrap.css',
        'assets/vendor/font-awesome/css/font-awesome.css',
        'assets/vendor/magnific-popup/magnific-popup.css',
        'assets/vendor/bootstrap-datepicker/css/datepicker3.css',
        'assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css',
        'assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css',
        'assets/vendor/morris/morris.css',
        'assets/stylesheets/theme.css',
        'assets/stylesheets/skins/default.css',
        'assets/stylesheets/theme-custom.css',
        ''
    ];
    public $js = [
        'assets/vendor/modernizr/modernizr.js',
        'assets/vendor/jquery/jquery.js',
        'assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js',
        'assets/vendor/bootstrap/js/bootstrap.js',
        'assets/vendor/nanoscroller/nanoscroller.js',
        'assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'assets/vendor/magnific-popup/magnific-popup.js',
        'assets/vendor/jquery-placeholder/jquery.placeholder.js',
        'assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js',
        'assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js',
        'assets/vendor/jquery-appear/jquery.appear.js',
        'assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js',
        'assets/vendor/jquery-easypiechart/jquery.easypiechart.js',
        'assets/vendor/flot/jquery.flot.js',
        'assets/vendor/flot-tooltip/jquery.flot.tooltip.js',
        'assets/vendor/flot/jquery.flot.pie.js',
        'assets/vendor/flot/jquery.flot.categories.js',
        'assets/vendor/flot/jquery.flot.resize.js',
        'assets/vendor/jquery-sparkline/jquery.sparkline.js',
        'assets/vendor/raphael/raphael.js',
        'assets/vendor/morris/morris.js',
        'assets/vendor/gauge/gauge.js',
        'assets/vendor/snap-svg/snap.svg.js',
        'assets/vendor/liquid-meter/liquid.meter.js',
        'assets/vendor/jqvmap/jquery.vmap.js',
        'assets/vendor/jqvmap/data/jquery.vmap.sampledata.js',
        'assets/vendor/jqvmap/maps/jquery.vmap.world.js',
        'assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js',
        'assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js',
        'assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js',
        'assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js',
        'assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js',
        'assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js',
        'assets/javascripts/theme.js',
        'assets/javascripts/theme.custom.js',
        'assets/javascripts/theme.init.js',
        'assets/javascripts/dashboard/examples.dashboard.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
