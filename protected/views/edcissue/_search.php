<?php
/* @var $this EdcissueController */
/* @var $model EdcIssue */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'id'); ?>
			<?php echo $form->textField($model,'id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'department'); ?>
			<?php //echo $form->textField($model,'department',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->dropDownList($model,'department', CHtml::listData($department,'DEPARTMENT_NAME','DEPARTMENT_NAME'), array('prompt'=>'Select Department')); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'location'); ?>
			<?php echo $form->textField($model,'location',array('size'=>50,'maxlength'=>50)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'issue_qty'); ?>
			<?php echo $form->textField($model,'issue_qty'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'issue_date'); ?>
			<?php //echo $form->textField($model,'issue_date'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'name'=>'EdcIssue[issue_date]',
				'model'=>$model,
				'value'=>$model->issue_date,
				// additional javascript options for the date picker plugin
				'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'showAnim'=>'fold',		
					),
				'htmlOptions'=>array(
					'style'=>'height:20px;',
					'readonly'=>'true' 
					),
				));
				?>
			</div>

	<!--<div class="row">
		<?php //echo $form->label($model,'af1'); ?>
		<?php //echo $form->textField($model,'af1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'af2'); ?>
		<?php //echo $form->textField($model,'af2',array('size'=>50,'maxlength'=>50)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- search-form -->