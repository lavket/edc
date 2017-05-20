<?php
/* @var $this EdcstockController */
/* @var $model EdcStock */

$this->breadcrumbs=array(
	'Edc Stocks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EdcStock', 'url'=>array('index')),
	array('label'=>'Create EdcStock', 'url'=>array('create')),
	array('label'=>'View EdcStock', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EdcStock', 'url'=>array('admin')),
);
?>

<h1>Update Edc Roll Stock <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'supplier'=>$supplier)); ?>