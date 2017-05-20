<?php Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 1.0}, 9000).fadeOut("slow");',
       CClientScript::POS_READY
    );
 if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div><?php
 endif; ?>
 
<?php
/* @var $this InventorymasterController */
/* @var $model InventoryMaster */

$this->breadcrumbs=array(
	'Inventory Masters'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List InventoryMaster', 'url'=>array('index')),
	array('label'=>'Create InventoryMaster', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('inventory-master-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Manage Inventory Masters</h1>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventory-master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		array(	
		'name'=>'ID',
		'htmlOptions' => array('style'=>'width:50px;'),
			),
		// 'WHEELCHAIR',
		array(	
		'name'=>'WHEELCHAIR',
		'htmlOptions' => array('style'=>'width:50px;'),
			),
		// 'SCROLLER',
		array(	
		'name'=>'SCROLLER',
		'htmlOptions' => array('style'=>'width:50px;'),
			),
		// 'USER_ID',
		array(	
		'name'=>'USER_ID',
		'htmlOptions' => array('style'=>'width:50px;'),
			),
		// 'USER_NAME',
				array(	
		'name'=>'USER_NAME',
		'htmlOptions' => array('style'=>'width:150px;'),
			),
		//'DATE_CREATED',
		array(	
		'name'=>'DATE_CREATED',
		'htmlOptions' => array('style'=>'width:130px;'),
			),
		/*
		'DATE_MODIFIED',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
