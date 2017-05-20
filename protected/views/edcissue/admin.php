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
/* @var $this EdcissueController */
/* @var $model EdcIssue */

$this->breadcrumbs=array(
	'Edc Issues'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EdcIssue', 'url'=>array('index')),
	array('label'=>'Create EdcIssue', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('edc-issue-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Edc Issues</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'department'=>$department,
)); ?>
</div><!-- search-form -->
<?php if(Yii::app()->session['adminUser'] == 'admin')
{
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edc-issue-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'department',
		'location',
		'issue_qty',
		'issue_date',
		'af1',
		/*
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
} else {
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edc-issue-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'department',
		'location',
		'issue_qty',
		'issue_date',
		/*
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
