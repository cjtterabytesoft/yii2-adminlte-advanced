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
 * @Themes: AdminLTE - Views [Frontend - site/about].
 * @since 1.0
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About Us';
$this->params['breadcrumbs'][] = Yii::t('adminlte',$this->title);

?>

<?= Html::beginTag('div', ['class' => 'form-box', 'id' => 'site-about','style' => 'min-width: 280px']) ?>
    <?= Html::beginTag('div', ['class' => 'header']) ?>
        <?= Html::tag('h3', Html::encode(Yii::t('adminlte',$this->title)), ['class' => 'panel-title-custom']) ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'body']) ?>
        <?= Html::tag('p', '') ?>
        <?= Html::tag('p', Yii::t('adminlte', 'This is the About page. You may modify the following file to customize its content:'), ['style' => '  text-align: justify;']) ?>
        <?= Html::tag('p', '') ?>
        <?= Html::tag('code',  __FILE__) ?>
        <?= Html::tag('p', '') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
