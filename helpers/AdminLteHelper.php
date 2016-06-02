<?php

/*
 * This file is part of the Cjt Terabyte LLC [yii2-extension].
 *
 * (c) Cjt Terabyte LLC [yii2-extension] <http://github.com/cjtterabytesoft>.
 * For the full copyright and license information, please view the LICENSE.md.
 * file that was distributed with this source code.
 *
 * @link http://www.cjtterabyte.com.
 * @author Wilmer Arámbula <cjtterabytellc@gmail.com>.
 * @copyright (c) 2015 Cjt Terabyte LLC.
 * @Extension: [yii2-adminlte-advanced].
 * @Helper [AdminLteHelper].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\advanced\helpers;

use yii;
use yii\helpers\Html;

class AdminLteHelper
{
    /**
     * Display Link Yii2 Oficial Page.
     */

    public static function powered()
    {
        return html::label('Powered by ', $for = null, $options = ['class' => 'hidden-xs']) . html::img(\yii::$app->params['Logo-Yii'], $options = ['class' => 'img-rounded hidden-xs']) . '  ' . Html::a(' Yii Framework', 'http://www.yiiframework.com/', ['class' => 'hidden-xs a', 'target' => '_blank', 'rel' => 'external']);
    }
}