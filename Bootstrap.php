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
 * @Configuration [Bootstrap].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\advanced;

use Yii;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;

class Bootstrap implements BootstrapInterface
{
    /** @inheritdoc */
    public function bootstrap($app)
    {
        /* Config Translation */
        if (!isset($app->get('i18n')->translations['adminlte*'])) {
            $app->get('i18n')->translations['adminlte*'] = [
                'class'    => PhpMessageSource::className(),
                'basePath' => __DIR__ . '/messages',
            ];
        }

        /* Copy Avatar Images */
        if (\yii\helpers\BaseFileHelper::filterPath(\Yii::getAlias('@frontend/web/images'), $options = [])) {
            \yii\helpers\BaseFileHelper::copyDirectory(\Yii::getAlias('@cjtterabytesoft/adminlte/advanced/images/'), \Yii::getAlias('@frontend/web/images'));
        }
    }
}