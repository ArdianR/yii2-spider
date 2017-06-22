<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTrans */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Detail Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-trans-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_trans], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_trans], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        
        <?= Html::a('Approve', ['approve', 'id' => $model->id_trans], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_trans',
            'id_imei',
            'name',
            'address',
            'phone',
            'email:email',
            'path_src',
            'path_web',
            'status',
            'stat_email1:email',
            'stat_email2:email',
            'created_at',
            [
                'attribute' => 'path_web',
                'format' => 'html',
                'label' => 'Photo',
                'value' => function ($data) {
                    return Html::img('../../uploads/' . $data['path_web'],
                        ['width' => '300px']);
                },        
            ],
        ],
    ]) ?>


</div>
