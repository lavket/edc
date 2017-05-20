<?php
/* @var $this EdcdetailController */
/* @var $model Edc_Detail */

$this->breadcrumbs=array(
	'Edc  Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Edc_Detail', 'url'=>array('index')),
	array('label'=>'Manage Edc_Detail', 'url'=>array('admin')),
);
?>

<h1>Add New Terminal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,
											   'company'=>$company,
											   'vendor'=>$vendor,
											   'sim'=>$sim,
											   'terminal_type'=>$terminal_type,
											   'department'=>$department,
											   'terminal_status'=>$terminal_status,)); ?>