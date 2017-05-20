<?php
/* @var $this EdcissueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edc Issues',
);

$this->menu=array(
	array('label'=>'Create EdcIssue', 'url'=>array('create')),
	array('label'=>'Manage EdcIssue', 'url'=>array('admin')),
);
?>

<h1>Edc Issues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
