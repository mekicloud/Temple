<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Monk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monk-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row" >
        <div class="col-lg-3 col-md-6 col-sm-12">
            <?= $form->field($model, 'monk_cid')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <?= $form->field($model, 'profile_id')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
             <?= $form->field($model, 'monk_aka')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
             <?= $form->field($model, 'monk_duo1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
             <?= $form->field($model, 'monk_duo2')->textInput(['maxlength' => true]) ?>
        </div>
        
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'monk_ordinate_age')->textInput() ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'monk_ordinate_datetime')->textInput() ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'guild')->textInput(['maxlength' => true]) ?>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?= $form->field($model, 'guild_sub_district')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?= $form->field($model, 'guild_district')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?= $form->field($model, 'guild_privince')->textInput(['maxlength' => true]) ?>
        </div>
        
        
    </div>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
