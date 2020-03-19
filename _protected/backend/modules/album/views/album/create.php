<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\album\models\Album */

$this->title = 'สร้างอัลบั้ม';
$this->params['breadcrumbs'][] = ['label' => 'อัลบั้ม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="album-create">

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
