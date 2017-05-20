<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'User list', 'url'=>array('index')),
	array('label'=>'Add user', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-detail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Accounts Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<br />
<br />


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-detail-grid',
	'dataProvider'=>$model->search('Account'),
	'filter'=>$model,
	'columns'=>array(
	//	'id',
		'username',
		//'password',
		//'rand',
		'email',
		//'department_id',
		'date_added',
		'date_modified',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

