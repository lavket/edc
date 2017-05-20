<?php
/* @var $this EdcdetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edc  Details',
);

$this->menu=array(
	array('label'=>'Create Edc_Detail', 'url'=>array('create')),
	array('label'=>'Manage Edc_Detail', 'url'=>array('admin')),
);
?>

<h1>Edc  Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
