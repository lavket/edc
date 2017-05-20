	<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<table>
	<tr>
		<td><?php echo $form->labelEx($model,'name'); ?></td>
		<td><?php echo $form->textField($model,'name',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'username'); ?></td>
		<td><?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'password'); ?></td>
		<td><?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'email'); ?></td>
		<td><?php echo $form->textField($model,'email',array('size'=>40,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'type'); ?></td>
		<td><?php echo $form->dropDownList($model,'type',array('admin'=>'Admin User','normal'=>'Normal User'),array('prompt'=>'Select Type of User'));
			?>
		<?php echo $form->error($model,'type'); ?></td>
	</tr>

	<tr>
		<td></td>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? '   Create   ' : '   Save   '); ?></td>
	</tr>
</table>

<?php $this->endWidget(); ?>

</div><!-- form -->