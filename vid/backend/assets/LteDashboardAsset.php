<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LteDashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/adminlte/bootstrap/css/bootstrap.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'themes/adminlte/dist/css/AdminLTE.min.css',
        'themes/adminlte/plugins/iCheck/square/blue.css',
        'themes/adminlte/dist/css/skins/_all-skins.min.css',
        'themes/adminlte/plugins/iCheck/flat/blue.css',
        'themes/adminlte/plugins/morris/morris.css',
        'themes/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'themes/adminlte/plugins/datepicker/datepicker3.css',
        'themes/adminlte/plugins/daterangepicker/daterangepicker-bs3.css',
        'themes/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];
    public $js = [
     'themes/adminlte/plugins/jQuery/jQuery-2.1.4.min.js',
     'themes/adminlte/bootstrap/js/bootstrap.min.js',
     'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
     'themes/adminlte/plugins/morris/morris.min.js',
     'themes/adminlte/plugins/sparkline/jquery.sparkline.min.js',
     'themes/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
     'themes/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
     'themes/adminlte/plugins/knob/jquery.knob.js',
     'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
     'themes/adminlte/plugins/daterangepicker/daterangepicker.js',
     'themes/adminlte/plugins/datepicker/bootstrap-datepicker.js',
     'themes/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
     'themes/adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
     'themes/adminlte/plugins/fastclick/fastclick.min.js',
     'themes/adminlte/dist/js/app.min.js',
     'themes/adminlte/dist/js/pages/dashboard.js',
     'themes/adminlte/dist/js/demo.js"',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

