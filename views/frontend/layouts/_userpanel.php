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
 * @Themes: AdminLTE - Views [Frontend - layouts/_userpanel].
 * @since 1.0
 */

use yii\helpers\Html;

?>

<?= Html::beginTag('div', ['class' => 'user-panel']) ?>
    <?= Html::beginTag('div', ['class' => 'pull-left image']) ?>
        <?= html::img(\yii::$app->params['Images_Url_60'],
            $options = ['class' => 'img-rounded', 'aria-expanded' => 'false'])
        ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'pull-left info']) ?>
        <?= html::tag('p', \yii::$app->user->identity->username) ?>
            <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-circle text-success']), '#') ?>
            <?= Html::tag('i', Yii::t('adminlte', 'On Line')) ?>
        <?= Html::endTag('P') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>