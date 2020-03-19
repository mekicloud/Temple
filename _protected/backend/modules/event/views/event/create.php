<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\event\models\Event */

$this->title = 'เพิ่มกิจกรรม';
$this->params['breadcrumbs'][] = ['label' => 'กิจกรรม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-create">

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
