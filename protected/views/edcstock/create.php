<?php
/* @var $this EdcstockController */
/* @var $model EdcStock */

$this->breadcrumbs=array(
	'Edc Stocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EdcStock', 'url'=>array('index')),
	array('label'=>'Manage EdcStock', 'url'=>array('admin')),
);
?>

<h1>Add Edc Roll Stock</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'supplier'=>$supplier)); ?>