<?php Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 1.0}, 7000).fadeOut("slow");',
       CClientScript::POS_READY
    );
 if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div><?php
 endif; ?>

<?php
/* @var $this EdcstockController */
/* @var $model EdcStock */

$this->breadcrumbs=array(
	'Edc Stocks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EdcStock', 'url'=>array('index')),
	array('label'=>'Create EdcStock', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('edc-stock-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Edc Stocks</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'supplier'=>$supplier,
)); ?>
</div><!-- search-form -->

<?php if(Yii::app()->session['adminUser'] == 'admin')
{
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edc-stock-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'supplier',
		'stock_qty',
		'entry_date',
		/*
		'id',
		'bal_qty',
		'af1',
		'af2',
		'date_created',
		'date_modified',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Actions',
			'template'=>'{view}{update}{delete}',
		),
	),
)); 
}else{
	
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edc-stock-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'supplier',
		'stock_qty',
		'entry_date',
		/*
		'id',
		'bal_qty',
		'af1',
		'af2',
		'date_created',
		'date_modified',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Actions',
			'template'=>'{view}',
		),
	),
));
	
}

?>

<?php $balancestock = $totalstock - $issuedstock; ?>

<div>
	<strong>Total Stock : </strong><?php echo $totalstock; ?> &nbsp;&nbsp; 
	<strong>Issued Stock : </strong><?php echo $issuedstock; ?>&nbsp;&nbsp;
	<strong>Balance Stock : </strong><?php echo $balancestock; ?>
</div>
