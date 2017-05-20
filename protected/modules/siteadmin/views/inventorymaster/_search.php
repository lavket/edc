<?php
/* @var $this InventorymasterController */
/* @var $model InventoryMaster */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WHEELCHAIR'); ?>
		<?php echo $form->textField($model,'WHEELCHAIR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SCROLLER'); ?>
		<?php echo $form->textField($model,'SCROLLER',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_NAME'); ?>
		<?php echo $form->textField($model,'USER_NAME',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_CREATED'); ?>
		<?php echo $form->textField($model,'DATE_CREATED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_MODIFIED'); ?>
		<?php echo $form->textField($model,'DATE_MODIFIED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->