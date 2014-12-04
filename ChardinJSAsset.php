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
class ChardinJSAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/chardin.js';

    public $css = [
        'chardinjs.css',
    ];		

    public $js = [
        'chardinjs.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
