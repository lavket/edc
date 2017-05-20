

<?php Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 1.0}, 7000).fadeOut("slow");',
       CClientScript::POS_READY
    );
 if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div><?php
 endif; ?>

<?php
/* @var $this EdcdetailController */
/* @var $model Edc_Detail */

$this->breadcrumbs=array(
	'Edc  Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Edc_Detail', 'url'=>array('index')),
	array('label'=>'Create Edc_Detail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('edc--detail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Edc  Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'company'=>$company,
	'vendor'=>$vendor,
	'sim'=>$sim,
	'terminal_type'=>$terminal_type,
	'terminal_status'=>$terminal_status,
	'department'=>$department,
)); ?>
</div><!-- search-form -->

<?php if(Yii::app()->session['adminUser'] == 'admin')
{
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edc--detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		/*array(            
			'header'=>'Sr',
			'name'=>'ID',
			//'value'=>'ID',
			'htmlOptions' => array('style'=>'width:20px;'),
			),*/
		array(
		'header'=>'No.',
		'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		),
		'TID_NO',
		'HDFC_TID_NO',
		'SERIAL_NO',
		'LOCATION',
		'DEPARTMENT',
		//'ISAMEX',
		/*array(
            'header' => 'ISAMEX',
            'name' => 'ISAMEX',
            'value' => '($data->ISAMEX == 0) ? "NA" : "AMEX"'
        ),*/
	/*Beautiful Customized Filter Code*/
		array(
			'name'=>'ISAMEX',
			'header'=>'ISAMEX',
			'filter'=>array(0=>"NA",1=>"AMEX"),
			'value'=>'@$data->ISAMEX ? "AMEX" : "NA"',
			'htmlOptions' => array('style'=>'width:65px;'),
			),
			
		'AMEX_NO',
		'SIM_CARD',
		'TERMINAL_TYPE',
		'VENDOR',
		'COMPANY',
		'STATUS',
		'MID_NO',
		'REMARKS',
		/*
		'DATE_CREATED',
		'DATE_MODIFIED',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Actions',
			'template'=>'{view}{update}{delete}',
		),
	),
)); 
}
else
{
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edc--detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		/*array(            
			'header'=>'Sr',
			'name'=>'ID',
			//'value'=>'ID',
			'htmlOptions' => array('style'=>'width:20px;'),
			),*/
		array(
		'header'=>'No.',
		'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		),
		'TID_NO',
		'HDFC_TID_NO',
		'SERIAL_NO',
		'LOCATION',
		'DEPARTMENT',
		//'ISAMEX',
		/*array(
            'header' => 'ISAMEX',
            'name' => 'ISAMEX',
            'value' => '($data->ISAMEX == 0) ? "NA" : "AMEX"'
        ),*/
	/*Beautiful Customized Filter Code*/
		array(
			'name'=>'ISAMEX',
			'header'=>'ISAMEX',
			'filter'=>array(0=>"NA",1=>"AMEX"),
			'value'=>'@$data->ISAMEX ? "AMEX" : "NA"',
			'htmlOptions' => array('style'=>'width:65px;'),
			),
			
		'AMEX_NO',
		'SIM_CARD',
		'TERMINAL_TYPE',
		'VENDOR',
		'COMPANY',
		'STATUS',
		'MID_NO',
		'REMARKS',
		/*
		'DATE_CREATED',
		'DATE_MODIFIED',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Actions',
			'template'=>'{view}{update}',
		),
	),
)); 
}

?>