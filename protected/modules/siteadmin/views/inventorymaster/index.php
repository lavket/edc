<?php
/* @var $this InventorymasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventory Masters',
);

/*$this->menu=array(
	array('label'=>'Create InventoryMaster', 'url'=>array('create')),
	array('label'=>'Manage InventoryMaster', 'url'=>array('admin')),
);*/
?>

<h1>Inventory Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
