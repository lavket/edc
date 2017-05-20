<?php
/* @var $this EdcissueController */
/* @var $model EdcIssue */

$this->breadcrumbs=array(
	'Edc Issues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EdcIssue', 'url'=>array('index')),
	array('label'=>'Manage EdcIssue', 'url'=>array('admin')),
);
?>

<h1>Issue Edc Rolls</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'department'=>$department,'balancestock'=>$balancestock,)); ?>