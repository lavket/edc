<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<table>
	<tr>
		<td><?php echo $form->label($model,'username'); ?></td>
		<td><?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>256)); ?></td>
	</tr>
	<!--<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rand'); ?>
		<?php echo $form->textField($model,'rand',array('size'=>50,'maxlength'=>50)); ?>
	</div>-->

	<tr>
		<td><?php echo $form->label($model,'email'); ?><td>
		<td><?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?></td>
	</tr>

	<!--<div class="row">
		<?php echo $form->label($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
	</div>-->

	<tr>
		<td><?php echo $form->label($model,'date_added'); ?></td>
		<td><?php echo $form->textField($model,'date_added'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->label($model,'date_modified'); ?></td>
		<td><?php echo $form->textField($model,'date_modified'); ?></td>
	</tr>

	<tr>
		<td></td>
		<td><?php echo CHtml::submitButton('Search'); ?></td>
	</tr>
</table>

<?php $this->endWidget(); ?>

</div><!-- search-form -->