<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Bmonk */

$this->title = 'Update Bmonk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bmonks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bmonk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
