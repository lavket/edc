<?php
/* @var $this EdcstockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edc Stocks',
);

$this->menu=array(
	array('label'=>'Create EdcStock', 'url'=>array('create')),
	array('label'=>'Manage EdcStock', 'url'=>array('admin')),
);
?>

<h1>Edc Stocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
