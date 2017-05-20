<?php
/* @var $this EdcissueController */
/* @var $model EdcIssue */

$this->breadcrumbs=array(
	'Edc Issues'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EdcIssue', 'url'=>array('index')),
	array('label'=>'Create EdcIssue', 'url'=>array('create')),
	array('label'=>'View EdcIssue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EdcIssue', 'url'=>array('admin')),
);
?>

<h1>Update Edc Rolls Issue <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'department'=>$department,)); ?>