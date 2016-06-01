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
 * @Themes: AdminLTE - Views [Frontend - site/login].
 * @since 1.0
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = Yii::t('adminlte',$this->title);

?>

<?= Html::beginTag('body', ['class' => 'form-box']) ?>
    <?= Html::beginTag('div', ['class' => 'form-box', 'id' => 'site-login-frontend', 'style' => 'min-width: 280px; width:30%']) ?>
        <?= Html::beginTag('div', ['class' => 'header']) ?>
            <?= html::tag('h3', Html::encode(Yii::t('adminlte', $this->title)), ['class' => 'panel-title-custom']) ?>
        <?= Html::endTag('div') ?>
        <?= Html::beginTag('div', ['class' => 'body']) ?>
            <?= Html::tag('p', Html::encode(Yii::t('adminlte','Please fill out the following fields.')), ['class' => 'login-box-msg']) ?>

            <?php $form = ActiveForm::begin([
                'id' => 'form-site-login-frontend',
                'options' => [
                    'class' => ''
                ]
            ]) ?>

                <?= Html::beginTag('div', ['class' => 'form-group has-feedback']) ?>
                    <?= $form->field($model, 'username', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '1',
                        'placeholder' => "UserName"], 'template' => "{input}<span class='fa fa-user form-control-feedback'></span>\n{hint}\n{error}"]) ?>
                <?= Html::endTag('div') ?>

                <?= Html::beginTag('div', ['class' => 'form-group has-feedback']) ?>
                    <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2',
                        'placeholder' => "Password"], 'template' => "{input}<span class='fa fa-key form-control-feedback'></span>\n{hint}\n{error}"])
                        ->passwordInput() ?>
                <?= Html::endTag('div') ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4'])->label(Yii::t('adminlte', 'rememberMe')) ?>

                <?= Html::beginTag('div', ['class' => 'footer']) ?>
                    <?= Html::submitButton(Yii::t('adminlte', 'Login'), ['class' => 'btn bg-black btn-block', 'tabindex' => '3',
                        'name' => 'login-button']) ?>
                    <?= Html::tag('p', Html::a(Yii::t('adminlte', 'Forgot Password ?'), ['/site/request-password-reset'],
                        ['tabindex' => '5', 'class'=>'text-footer-login'])) ?>
                <?= Html::endTag('div') ?>

            <?php ActiveForm::end(); ?>

        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('body') ?>