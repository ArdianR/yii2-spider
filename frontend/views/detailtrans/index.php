<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailTransSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Trans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-trans-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Trans', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_trans',
            'id_imei',
            'name',
            'address',
            'phone',
            // 'email:email',
            // 'path_src',
            // 'path_web',
            // 'status',
            // 'stat_email1:email',
            // 'stat_email2:email',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
