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
 * @Themes: AdminLTE - Views [Frontend - site/resetPassword].
 * @since 1.0
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = Yii::t('adminlte',$this->title);

?>

<?= Html::beginTag('div', ['class' => 'form-box', 'id' => 'site-reset-password', 'style' => 'min-width: 280px; width:30%']) ?>
    <?= Html::beginTag('div', ['class' => 'header']) ?>
        <?= Html::tag('h3', Html::encode(Yii::t('adminlte',$this->title)), ['class' => 'panel-title-custom']) ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'body']) ?>
        <?= Html::tag('p', Yii::t('adminlte', 'Please choose your new password.'), ['style' => '  text-align: justify;']) ?>
        <?php $form = ActiveForm::begin([
            'id' => 'reset-password-form',
        ]); ?>

            <?= $form->field($model, 'password')->passwordInput()->label(Yii::t('adminlte', 'Password')) ?>

            <?= Html::beginTag('div', ['class' => 'footer']) ?>
                <?= Html::submitButton(Yii::t('adminlte', 'Save'), ['class' => 'btn bg-black btn-block']) ?>
            <?= Html::endTag('div') ?>
        <?php ActiveForm::end(); ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>