<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Profile */

$this->title = 'เพิ่มข้อมูลบุคคล';
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลบุคคล', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-create">

    <section class="panel panel-featured panel-featured-warning">
        <header class="panel-heading">
            <?= Html::a('ย้อนกลับ', ['index'], ['class' => 'btn btn-warning']) ?>
        </header>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </section>

</div>
