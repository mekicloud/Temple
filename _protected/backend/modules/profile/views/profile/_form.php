<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'id_card')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
             <?= $form->field($model, 'id_netbook')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
             <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
             <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
             <?= $form->field($model, 'career')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'race')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'father')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'mother')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6">
            <?= $form->field($model, 'skintone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-6">
            <?= $form->field($model, 'body')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-6">
            <?= $form->field($model, 'scar')->textInput(['maxlength' => true]) ?>
        </div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
            <?= $form->field($model, 'birthdate_th')->textInput() ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'seiya')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'birthdate')->textInput() ?>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'sub_distric')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'distric')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?= $form->field($model, 'clane')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'temple')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
