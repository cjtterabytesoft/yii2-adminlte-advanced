<?php

/*
 * This file is part of the Intracheck project.
 *
 * (c) Intracheck project <http://github.com/tecnologiaterabyte>
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 * @link http://www.tecnologiaterabyte.com
 * @author Wilmer Arámbula <tecnologiaterabyte@gmail.com>
 * @copyright Copyright (c) 2014 Asoc. Coop. Tecnologia Terabyte 124, RL.
 * @Extension: [yii2-adminlte-advanced].
 * @Configuration Assets [Frontend - AppAssetAdminLTE].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\advanced\assets\frontend;

use yii\web\AssetBundle;

class AppAssetAdminLTE extends AssetBundle
{
    public $sourcePath = '@cjtterabytesoft/adminlte/advanced/assets/frontend/';

    public $css = [
        'css/site-adminlte.css',
    ];

    public $js = [
        'js/site-custom.js',
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*',
        ],
    ];
}