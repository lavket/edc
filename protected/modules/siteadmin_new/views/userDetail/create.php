<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List UserDetail', 'url'=>array('index')),
	array('label'=>'Manage UserDetail', 'url'=>array('admin')),
);*/
?>

<h1>Add User</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'departments'=>$departments)); ?>