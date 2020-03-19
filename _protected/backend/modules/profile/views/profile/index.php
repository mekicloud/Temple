<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\profile\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลบุคคล';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <section class="panel panel-featured panel-featured-primary">
        <header class="panel-heading">
            <?= Html::a('เพิ่มข้อมูลบุคคล', ['create'], ['class' => 'btn btn-primary']) ?>
        </header>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    'id_card',
                    //'id_netbook',
                    'name',
                    'surname',
                    'education',
                    //'career',
                    //'race',
                    //'nationality',
                    //'body',
                    //'skintone',
                    //'scar',
                    //'father',
                    //'mother',
                    //'birthdate_th',
                    //'seiya',
                    //'birthdate',
                    //'sub_distric',
                    //'distric',
                    //'province',
                    //'clane',
                    //'temple',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </section>

</div>
