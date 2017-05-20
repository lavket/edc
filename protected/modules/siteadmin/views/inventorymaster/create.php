<?php
/* @var $this InventorymasterController */
/* @var $model InventoryMaster */

$this->breadcrumbs=array(
	'Inventory Masters'=>array('index'),
	'Create',
);

?>

<h1>Enter Inventory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>