<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\event\models\Event */

$this->title = 'Update Event: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-update">

<section class="panel panel-featured panel-featured-warning">
								<header class="panel-heading">
									
                                    <?= Html::a('ย้อนกลับ', ['index'], ['class' => 'btn btn-warning']) ?>
								</header>
								<div class="panel-body">
                                <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
								</div>
                            </section>

</div>
