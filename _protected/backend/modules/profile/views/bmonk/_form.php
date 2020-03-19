<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Bmonk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bmonk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profile_id')->textInput() ?>

    <?= $form->field($model, 'bm_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bm_aka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mank_preceptor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bm_ordinate_age')->textInput() ?>

    <?= $form->field($model, 'bm_ordinate_date')->textInput() ?>

    <?= $form->field($model, 'guild')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guild_sub_district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guild_district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guild_province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bm_create')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
