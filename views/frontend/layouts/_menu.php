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
 * @Themes: AdminLTE - Views [Frontend- layouts/_menu].
 * @since 1.0
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;

$user = \yii::$app->user->identity;

$menuItems = [
    ['label' => Html::tag('i', '', ['class' => 'fa fa-home fa-lg']) . ' ' .  Yii::t('adminlte', 'Home'), 'url' => ['/site/index']],
    ['label' => Html::tag('i', '', ['class' => 'fa fa-spinner fa-lg fa-spin']) . ' ' .  Yii::t('adminlte', 'About Us'), 'url' => ['/site/about']],
    ['label' => Html::tag('i', '', ['class' => 'fa fa-envelope fa-lg']) . ' ' . Yii::t('adminlte', 'Contact'), 'url' => ['/site/contact']],
];

if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => Html::tag('i', '', ['class' => 'ion-android-person-add fa-lg']) . ' ' . Yii::t('adminlte', 'Signup'), 'url' => ['/site/signup']];
    $menuItems[] = ['label' => Html::tag('i', '', ['class' => 'fa fa-sign-in fa-lg']) . ' ' . Yii::t('adminlte', 'Login'), 'url' => ['/site/login']];
} else {
    $baseimg = Yii::$app->session->get('user.avatar60');
    $menuItems[] = ['label' => $user->username . ' ' .  Html::img($baseimg, $options = ['class'=>'img-rounded', 'aria-expanded'=>'false']),
        'items' => [
            ['label' => Html::tag('i', '', ['class' => 'fa fa-user fa-lg']) . ' ' . Yii::t('adminlte', 'User Profile'), 'url' => ['/user/settings/profile']],
            ['label' => Html::tag('i', '', ['class' => 'fa fa-sign-out fa-lg']) . ' ' . Yii::t('adminlte', 'Logout'), 'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']],
        ],
    ];
}

echo Nav::widget([
    'options' => ['class' => 'nav navbar-nav navbar-right'],
    'items' => $menuItems,
    'encodeLabels'=>false,
]);
