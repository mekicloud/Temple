<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\event\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'กิจกรรม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <section class="panel panel-featured panel-featured-warning">
								<header class="panel-heading">
									<div class="panel-actions">
										<a class="fa fa-caret-down" href="#"></a>
										<a class="fa fa-times" href="#"></a>
									</div>
                                    <?= Html::a('เพิ่มกิจกรรม', ['create'], ['class' => 'btn btn-warning']) ?>
								</header>
								<div class="panel-body">
                                <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'detail',
            //'img',
           // 'status',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
								</div>
                            </section>
                            
    


</div>
