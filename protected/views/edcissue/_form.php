<?php
/* @var $this EdcissueController */
/* @var $model EdcIssue */
/* @var $form CActiveForm */
?>

<?php //if($balancestock>0) {?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'edc-issue-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php //echo $form->textField($model,'department',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->dropDownList($model,'department', CHtml::listData($department,'DEPARTMENT_NAME','DEPARTMENT_NAME'), array('prompt'=>'Select Department')); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'issue_qty'); ?>
		<?php echo $form->textField($model,'issue_qty'); ?> <strong>(Avail Stock : <?php echo $balancestock; ?>)</strong>
		<?php echo $form->error($model,'issue_qty'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'issue_date'); ?>
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
		<?php echo $form->error($model,'issue_date'); ?>
	</div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::submitButton('',array('class'=>'submit-login')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php //} else { echo 'No Stock';}?>