<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = "@app/web";
        $this-> css = [
            'css/site.css',
            'css/style.css',
            'css/jquery-ui.css',
            'css/smoothbox.css'
        ];
        $this->  js = [
            'js/move-top.js',
            'js/easing.js'
        ];
        $this->  depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
            'yii\bootstrap\BootstrapPluginAsset'
        ];
        $this->jsOptions["position"]=View::POS_HEAD;
    }
}
