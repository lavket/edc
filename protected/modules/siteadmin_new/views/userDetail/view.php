<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->id,
);

/*$this->menu=array(
	array('label'=>'User list', 'url'=>array('index')),
	array('label'=>'Add user', 'url'=>array('create')),
	array('label'=>'Update user', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete user', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage user', 'url'=>array('admin')),
);*/
?>

<h1>View UserDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		//'password',
		//'rand',
		'email',
		'department_id',
		'date_added',
		//'date_modified',
	),
)); ?>
