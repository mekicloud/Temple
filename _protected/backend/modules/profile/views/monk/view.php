<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\profile\models\Monk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Monks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="monk-view">

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
            'monk_cid',
            'monk_aka',
            'monk_duo1',
            'monk_duo2',
            'monk_ordinate_age',
            'monk_ordinate_datetime',
            'guild',
            'guild_sub_district',
            'guild_district',
            'guild_privince',
            'monk_img',
            'monk_create',
        ],
    ]) ?>

</div>
