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
 * @Themes: AdminLTE - Views [Backend - layouts/_footer].
 * @since 1.0
 */

use yii\helpers\Html;
use cjtterabytesoft\adminlte\advanced\helpers\AdminLteHelper;

?>

<?= Html::beginTag('footer', ['class' => 'main-footer']) ?>
    <?= Html::beginTag('div', ['class' => 'footer-adminlte']) ?>
        <?= Html::beginTag('div', ['class' => 'container']) ?>
            <?= Html::beginTag('div', ['class' => 'pull-left-custom']) ?>
                <?= Html::tag('span', '', ['class' => 'iconos fa fa-copyright fa-2x']) ?>
                <?= Html::tag('span', '&nbsp' . \yii::$app->params['Author']) ?>
            <?= Html::endTag('div') ?>
            <?= AdminLteHelper::powered() ?>
            <?= Html::beginTag('div', ['class' => 'pull-right-custom']) ?>
                <?= Html::tag('span', Yii::t('adminlte', 'Social Networks:'), ['class' => 'hidden-xs','style' => 'padding-right: 5px']) ?>
                <?= Html::a('', \yii::$app->params['Facebook_Account'], ['class' => 'iconos ion-social-facebook fa-2x', 'target' => '_blank']) ?>
                <?= Html::a('', \yii::$app->params['Twitter_Account'], ['class' => 'iconos ion-social-twitter fa-2x', 'target' => '_blank']) ?>
                <?= Html::a('', \yii::$app->params['Google_Account'], ['class' => 'iconos ion-social-googleplus fa-2x', 'target' => '_blank']) ?>
                <?= Html::a('', \yii::$app->params['Linkedin_Account'], ['class' => 'iconos ion-social-linkedin  fa-2x', 'target' => '_blank']) ?>
            <?= Html::endTag('div') ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('footer') ?>