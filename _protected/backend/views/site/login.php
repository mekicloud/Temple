<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'Login');
?>
<div class="site-login">

    <section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?=str_replace("/backend","",Yii::getAlias('@web')).'/uploads/images/backend_theme/';?>logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> <?= Html::encode($this->title) ?></h2>
					</div>
					<div class="panel-body">

        <p><?= Yii::t('app', 'Please fill out the following fields to login:') ?></p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div>
            <?php //-- use email or username field depending on model scenario --// ?>
            <?php if ($model->scenario === 'lwe'): ?>
                <?= $form->field($model, 'email') ?>        
            <?php else: ?>
                <?= $form->field($model, 'username') ?>
            <?php endif ?>

            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
        </div>
        
        <div class="form-group text-right">
            <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
        </div>
        
        <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>
        <div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-danger mb-md ml-xs mr-xs">Connect with <i class="fa fa-google-plus"></i></a>
							</div>
        <?php ActiveForm::end(); ?>

        </div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
			</div>
		</section>
  
</div>
