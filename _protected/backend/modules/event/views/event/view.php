<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\event\models\Event */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="event-view">

    <section class="panel panel-featured">
								<header class="panel-heading">
                                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
								</header>
								<div class="panel-body">
                                <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'detail')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'status')->textInput() ?>

<?= $form->field($model, 'created_at')->textInput() ?>

<?= $form->field($model, 'created_by')->textInput() ?>

<?= $form->field($model, 'updated_at')->textInput() ?>

<?= $form->field($model, 'updated_by')->textInput() ?>

<?php ActiveForm::end(); ?>
								</div>
							</section>
    

</div>
