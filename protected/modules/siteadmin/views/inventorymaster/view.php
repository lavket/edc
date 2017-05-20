<?php
/* @var $this InventorymasterController */
/* @var $model InventoryMaster */

$this->breadcrumbs=array(
	'Inventory Masters'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List InventoryMaster', 'url'=>array('index')),
	array('label'=>'Create InventoryMaster', 'url'=>array('create')),
	array('label'=>'Update InventoryMaster', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete InventoryMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InventoryMaster', 'url'=>array('admin')),
);
?>

<h1>View InventoryMaster #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'WHEELCHAIR',
		'SCROLLER',
		'USER_ID',
		'USER_NAME',
		'DATE_CREATED',
		'DATE_MODIFIED',
	),
)); ?>
