<?php
/* @var $this UserDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Details',
);

$this->menu=array(
	array('label'=>'Add user', 'url'=>array('create')),
	array('label'=>'Manage user', 'url'=>array('admin')),
);
?>

<h1>User Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
