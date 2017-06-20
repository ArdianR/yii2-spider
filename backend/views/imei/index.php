<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImeiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'IMEI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imei-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Imei', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_imei',
            'imei1',
            'imei2',
            'warehouse',
            'sold',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
