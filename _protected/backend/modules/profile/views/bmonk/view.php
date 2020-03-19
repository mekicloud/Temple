<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Bmonk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bmonks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bmonk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'profile_id',
            'bm_name',
            'bm_aka',
            'mank_preceptor',
            'bm_ordinate_age',
            'bm_ordinate_date',
            'guild',
            'guild_sub_district',
            'guild_district',
            'guild_province',
            'bm_create',
        ],
    ]) ?>

</div>
