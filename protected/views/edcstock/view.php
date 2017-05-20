<?php
/* @var $this EdcstockController */
/* @var $model EdcStock */

$this->breadcrumbs=array(
	'Edc Stocks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EdcStock', 'url'=>array('index')),
	array('label'=>'Create EdcStock', 'url'=>array('create')),
	array('label'=>'Update EdcStock', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EdcStock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EdcStock', 'url'=>array('admin')),
);
?>

<h1>View Edc Stock #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'supplier',
		'stock_qty',
		'entry_date',
		//'bal_qty',
		//'af1',
		//'af2',
		'date_created',
		'date_modified',
	),
)); ?>
