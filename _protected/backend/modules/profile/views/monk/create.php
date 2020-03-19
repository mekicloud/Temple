<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Monk */

$this->title = 'เพิ่มข้อมูลพระสงฆ์';
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลพระสงฆ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monk-create">

    <section class="panel panel-featured panel-featured-warning">
        <header class="panel-heading">
            <?= Html::a('เพิ่มข้อมูลพระสงฆ์', ['create'], ['class' => 'btn btn-primary']) ?>
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
