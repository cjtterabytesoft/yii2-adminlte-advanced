<?php

/*
 * This file is part of the Terabyte yii2-extension.
 *
 * (c) Terabyte yii2-extension <http://github.com/tecnologiaterabyte>
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 * @link http://www.tecnologiaterabyte.com
 * @author Wilmer Arámbula <tecnologiaterabyte@gmail.com>
 * @copyright (c) 2014 Asoc. Coop. Tecnologia Terabyte 124, RL.
 * @Extension: [yii2-adminlte-advanced].
 * @Assets [AdminLTEAsset].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\advanced\assets\adminlte;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/admin-lte/dist/';

    public $css = [
        'css/AdminLTE.css',
        'css/skins/_all-skins.css',
    ];

    public $js = [
        'js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'cjtterabytesoft\adminlte\advanced\assets\bower\IoniconsAsset',
        'cjtterabytesoft\adminlte\advanced\assets\bower\FontAwesomeAsset',
        'cjtterabytesoft\adminlte\advanced\assets\bower\BootboxAsset',
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'css/skins/*',
            'js/*',
            'js/pages/*'
        ],
        'except' => [
            'img',
        ]
    ];
}