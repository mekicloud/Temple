<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Bmonk */

$this->title = 'Create Bmonk';
$this->params['breadcrumbs'][] = ['label' => 'Bmonks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bmonk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
