<?php
/* @var $this EdcissueController */
/* @var $model EdcIssue */

$this->breadcrumbs=array(
	'Edc Issues'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EdcIssue', 'url'=>array('index')),
	array('label'=>'Create EdcIssue', 'url'=>array('create')),
	array('label'=>'Update EdcIssue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EdcIssue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EdcIssue', 'url'=>array('admin')),
);
?>

<h1>View Edc Issue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'department',
		'location',
		'issue_qty',
		'issue_date',
		//'af1',
		//'af2',
		'date_created',
		'date_modified',
	),
)); ?>
