<?php
/* @var $this EdcdetailController */
/* @var $model Edc_Detail */

$this->breadcrumbs=array(
	'Edc  Details'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Edc_Detail', 'url'=>array('index')),
	array('label'=>'Create Edc_Detail', 'url'=>array('create')),
	array('label'=>'Update Edc_Detail', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Edc_Detail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Edc_Detail', 'url'=>array('admin')),
);
?>

<h1>View Edc_Detail #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'TID_NO',
		'SERIAL_NO',
		'LOCATION',
		'ISAMEX',
		'AMEX_NO',
		'SIM_CARD',
		'TERMINAL_TYPE',
		'VENDOR',
		'COMPANY',
		'STATUS',
		'REMARKS',
		'DATE_CREATED',
		'DATE_MODIFIED',
	),
)); ?>
