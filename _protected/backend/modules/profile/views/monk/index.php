<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\profile\models\MonkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลพระภิกษุ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monk-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <section class="panel panel-featured panel-featured-primary">
        <header class="panel-heading">
            <?= Html::a('เพิ่มข้อมูลพระภิกษุ', ['create'], ['class' => 'btn btn-primary']) ?>
        </header>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    //'profile_id',
                    'monk_aka',
                    'monk_cid',
                    //'monk_duo1',
                    //'monk_duo2',
                    'monk_ordinate_age',
                    'monk_ordinate_datetime',
                    //'guild',
                    //'guild_sub_district',
                    //'guild_district',
                    //'guild_privince',
                    //'monk_img',
                    //'monk_create',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </section>

</div>
