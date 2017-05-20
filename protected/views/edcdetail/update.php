<?php
/* @var $this EdcdetailController */
/* @var $model Edc_Detail */

$this->breadcrumbs=array(
	'Edc  Details'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Edc_Detail', 'url'=>array('index')),
	array('label'=>'Create Edc_Detail', 'url'=>array('create')),
	array('label'=>'View Edc_Detail', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Edc_Detail', 'url'=>array('admin')),
);
?>

<h1>Update Edc_Detail <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,
											   'company'=>$company,
											   'vendor'=>$vendor,
											   'sim'=>$sim,
											   'terminal_type'=>$terminal_type,
											   'department'=>$department,
											   'terminal_status'=>$terminal_status,)); ?>