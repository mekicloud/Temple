<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_card') ?>

    <?= $form->field($model, 'id_netbook') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'surname') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'career') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'body') ?>

    <?php // echo $form->field($model, 'skintone') ?>

    <?php // echo $form->field($model, 'scar') ?>

    <?php // echo $form->field($model, 'father') ?>

    <?php // echo $form->field($model, 'mother') ?>

    <?php // echo $form->field($model, 'birthdate_th') ?>

    <?php // echo $form->field($model, 'seiya') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'sub_distric') ?>

    <?php // echo $form->field($model, 'distric') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'clane') ?>

    <?php // echo $form->field($model, 'temple') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
