<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\profile\models\BmonkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bmonks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bmonk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bmonk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'profile_id',
            'bm_name',
            'bm_aka',
            'mank_preceptor',
            //'bm_ordinate_age',
            //'bm_ordinate_date',
            //'guild',
            //'guild_sub_district',
            //'guild_district',
            //'guild_province',
            //'bm_create',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
