<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\BmonkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bmonk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'profile_id') ?>

    <?= $form->field($model, 'bm_name') ?>

    <?= $form->field($model, 'bm_aka') ?>

    <?= $form->field($model, 'mank_preceptor') ?>

    <?php // echo $form->field($model, 'bm_ordinate_age') ?>

    <?php // echo $form->field($model, 'bm_ordinate_date') ?>

    <?php // echo $form->field($model, 'guild') ?>

    <?php // echo $form->field($model, 'guild_sub_district') ?>

    <?php // echo $form->field($model, 'guild_district') ?>

    <?php // echo $form->field($model, 'guild_province') ?>

    <?php // echo $form->field($model, 'bm_create') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
