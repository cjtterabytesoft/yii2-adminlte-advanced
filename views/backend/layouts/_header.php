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
 * @Themes: AdminLTE - Views [Backend - layouts/_header].
 * @since 1.0
 */

use yii\helpers\Html;

?>

<!-- Header Navbar: style can be found in header.less -->
<?= Html::beginTag('header', ['class' => 'main-header']) ?>
    <?php if (!Yii::$app->user->isGuest): ?>
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        <?= Html::a(\yii::$app->params['WebName'], \Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <?php endif; ?>
    <?= Html::beginTag('nav', ['class' => 'navbar navbar-static-top']) ?>
        <?php if (!Yii::$app->user->isGuest): ?>
            <!-- Sidebar toggle button-->
            <?= Html::a(Html::tag('span', 'Toggle navigation', ['class' => 'sr-only']) .
                Html::tag('span', '', ['class' => 'icon-bar']) . Html::tag('span', '', ['class' => 'icon-bar'])
                ,'#', ['class' => 'sidebar-toggle', 'data-toggle'=>'offcanvas','role'=>'button'])
            ?>
            <?= Html::beginTag('div', ['class' => 'navbar-custom-menu']) ?>
                <!-- User Account: style can be found in dropdown.less -->
                <?= $this->render('_menuser') ?>
            <?= Html::endTag('div') ?>
            <?php else: ?>
                <?= Html::beginTag('div', ['class' => 'navbar-header']) ?>
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <?= Html::beginTag('div', ['class' => 'navbar-brand']) ?>
                        <?= Html::a(\yii::$app->params['WebName'], \Yii::$app->homeUrl, ['class' => 'panel-title-custom']) ?>
                    <?= Html::endTag('div') ?>
                    <?= Html::button(html::tag('i', '',['class' => 'fa fa-bars']), ['class' => 'navbar-toggle collapsed', 'type' => 'button',
                        'data-toggle' => 'collapse', 'data-target' => '#navbar-collapse']) ?>
                <?= Html::endTag('div') ?>
                <?= Html::beginTag('div', ['class' => 'collapse navbar-collapse', 'id' => 'navbar-collapse']) ?>
                    <?= $this->render('_menu') ?>
                <?= Html::endTag('div') ?>
        <?php endif; ?>
    <?= Html::endTag('nav') ?>
<?= Html::endTag('header') ?>