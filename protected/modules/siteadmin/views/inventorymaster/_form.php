<?php
/* @var $this InventorymasterController */
/* @var $model InventoryMaster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventory-master-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<table>
	<tr>
		<td><?php echo $form->labelEx($model,'WHEELCHAIR'); ?></td>
		<td><?php echo $form->textField($model,'WHEELCHAIR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'WHEELCHAIR'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'SCROLLER'); ?></td>
		<td><?php echo $form->textField($model,'SCROLLER',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SCROLLER'); ?></td>
	</tr>

	<tr>
		<td></td>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? '   Create   ' : '  Update  '); ?></td>
	</tr>
</table>

<?php $this->endWidget(); ?>

</div><!-- form -->