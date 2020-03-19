<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\album\models\AlbumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'อัลบั้มภาพ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="album-index">

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<section class="panel panel-featured panel-featured-warning">
								<header class="panel-heading">
									<div class="panel-actions">
										<a class="fa fa-caret-down" href="#"></a>
										<a class="fa fa-times" href="#"></a>
									</div>
                                    <?= Html::a('เพิ่มอัลบั้มภาพ', ['create'], ['class' => 'btn btn-info']) ?>
								</header>
								<div class="panel-body">
                                <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'title',
            'detail:ntext',
            //'img',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
								</div>
                            </section>




    


</div>
