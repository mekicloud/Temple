<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\MonkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'profile_id') ?>

    <?= $form->field($model, 'monk_name') ?>

    <?= $form->field($model, 'monk_aka') ?>

    <?= $form->field($model, 'monk_duo1') ?>

    <?php // echo $form->field($model, 'monk_duo2') ?>

    <?php // echo $form->field($model, 'monk_ordinate_age') ?>

    <?php // echo $form->field($model, 'monk_ordinate_datetime') ?>

    <?php // echo $form->field($model, 'guild') ?>

    <?php // echo $form->field($model, 'guild_sub_district') ?>

    <?php // echo $form->field($model, 'guild_district') ?>

    <?php // echo $form->field($model, 'guild_privince') ?>

    <?php // echo $form->field($model, 'monk_create') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
