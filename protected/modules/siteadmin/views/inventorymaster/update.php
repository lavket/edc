<?php
/* @var $this InventorymasterController */
/* @var $model InventoryMaster */

$this->breadcrumbs=array(
	'Inventory Masters'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);
 
?>

<h1>Update Inventory <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>