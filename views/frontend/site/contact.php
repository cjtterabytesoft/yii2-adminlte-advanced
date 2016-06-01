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
 * @Themes: AdminLTE - Views [Frontend - site/contact].
 * @since 1.0
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = Yii::t('adminlte',$this->title);

?>

<?= Html::beginTag('div', ['class' => 'form-box', 'id' => 'site-contact', 'style' => 'min-width: 280px; width: 45%']) ?>
    <?= Html::beginTag('div', ['class' => 'header']) ?>
        <?= Html::tag('h3', Html::encode(Yii::t('adminlte',$this->title)), ['class' => 'panel-title-custom']) ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'body']) ?>
        <?= Html::tag('p', Yii::t('adminlte', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.'), ['style' => '  text-align: justify;']) ?>
        <?php $form = ActiveForm::begin([
            'id' => 'contact-form',
        ]) ?>

            <?= $form->field($model, 'name')->label(Yii::t('adminlte', 'Username')) ?>

            <?= $form->field($model, 'email')->label(Yii::t('adminlte', 'Email')) ?>

            <?= $form->field($model, 'subject')->label(Yii::t('adminlte', 'Subject')) ?>

            <?= $form->field($model, 'body')->textArea(['rows' => 6])->label(Yii::t('adminlte', 'Body')) ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ])->label(Yii::t('adminlte', 'Verification Code')) ?>

            <?= Html::beginTag('div', ['class' => 'footer']) ?>
                <?= Html::submitButton(Yii::t('adminlte', 'Submit'), ['class' => 'btn bg-black btn-block', 'name' => 'contact-button']) ?>
            <?= Html::endTag('div') ?>
        <?php ActiveForm::end(); ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
