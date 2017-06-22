<?php
use yii\bootstrap\Modal;
use kartik\widgets\ActiveForm;
use kartik\widgets\FileInput;
//Aditiional Namespace
// FileInput inside a modal dialog
use yii\helpers\Html;
use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;

$this->title = 'Detail Trans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-trans-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Trans', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
<?php
$columns = [
    ['class'=>'kartik\grid\SerialColumn', 'order'=>DynaGrid::ORDER_FIX_LEFT],
    'id_trans',
    'name',
    'address',
    'phone',
    'email:email',
    //'path_src',
    /*[
        'attribute'=>'publish_date',
        'filterType'=>GridView::FILTER_DATE,
        'format'=>'raw',
        'width'=>'170px',
        'filterWidgetOptions'=>[
            'pluginOptions'=>['format'=>'yyyy-mm-dd']
        ],
    ],*/
    /*[
        'attribute' => 'path_web',
        'format' => 'html',
        'label' => 'Photo',
        'value' => function ($data) {
            return Html::img('../../uploads/' . $data['path_web'],
                ['width' => '60px']);
        },        
    ],*/
    //'created_at',
    'status',
	[
        'attribute'=>'created_at',
        'filterType'=>GridView::FILTER_DATE,
        'format'=>'raw',
        'width'=>'170px',
        'filterWidgetOptions'=>[
            'pluginOptions'=>['format'=>'yyyy-mm-dd']
        ],
	],
    /*[
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'status',
        'vAlign'=>'middle',
    ],*/
    [
        'class'=>'kartik\grid\ActionColumn',
        'dropdown'=>false,
        'order'=>DynaGrid::ORDER_FIX_RIGHT,
		'vAlign'=>'middle',
		'template' => '{view} {update} {delete} {approve}',
		//'urlCreator' => function($action, $model, $key, $index) { 
		//				return Url::to([$action,'id'=>$key]);
		//				},
		'buttons'=>[
        'approve' => function ($url, $model, $key) {
				return Html::a('<span class="glyphicon glyphicon-copy"></span>', ['approve', 'id'=>$model->id_trans],['title'=>'Approve']);
				},
		'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
		'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
		'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                      'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                      'data-request-method'=>'post',
                      'data-toggle'=>'tooltip',
                      'data-confirm-title'=>'Are you sure?',
                      'data-confirm-message'=>'Are you sure want to delete this item'],
		
    ],      
    ],
	//Multiple Checklist Disabled
    //['class'=>'kartik\grid\CheckboxColumn', 'order'=>DynaGrid::ORDER_FIX_RIGHT],
];

$dynagrid = DynaGrid::begin([
    'columns' => $columns,
    'theme'=>'panel-info',
    'showPersonalize'=>true,
    'storage' => 'session',
    'gridOptions'=>[
        'dataProvider'=>$dataProvider,
        'filterModel'=>$searchModel,
        'showPageSummary'=>true,
        'floatHeader'=>true,
        'pjax'=>true,
        'responsiveWrap'=>false,
        'panel'=>[
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  Library</h3>',
            'before' =>  '<div style="padding-top: 7px;"><em></em></div>',
            'after' => false
        ],
        'toolbar' =>  [
            ['content'=>
                Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>'Add Book', 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>'Reset Grid'])
            ],
            //['content'=>'{dynagridFilter}{dynagridSort}{dynagrid}'],
            '{export}',
        ]
    ],
    'options'=>['id'=>'dynagrid-1'] // a unique identifier is important
]);
if (substr($dynagrid->theme, 0, 6) == 'simple') {
    $dynagrid->gridOptions['panel'] = false;
}  
DynaGrid::end();