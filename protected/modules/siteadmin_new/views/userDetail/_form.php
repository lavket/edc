<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

<table>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<tr>
		<td><?php echo $form->labelEx($model,'username'); ?></td>
		<td><?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'username'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'password'); ?></td>
		<td><?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'password'); ?></td>
	</tr>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'rand'); ?>
		<?php echo $form->textField($model,'rand',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rand'); ?>
	</div>-->

	<tr>
		<td><?php echo $form->labelEx($model,'email'); ?></td>
		<td><?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?></td>
	</tr>


	<!--<div class="row">
		<?php //echo $form->labelEx($model,'date_added'); ?>
		<?php //echo $form->textField($model,'date_added'); ?>
		<?php //echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'date_modified'); ?>
		<?php //echo $form->textField($model,'date_modified'); ?>
		<?php //echo $form->error($model,'date_modified'); ?>
	</div>-->

	<tr>
		<td></td>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? ' Add user ' : ' Update User '); ?></td>
	</tr>

</table>

<?php $this->endWidget(); ?>

</div><!-- form -->