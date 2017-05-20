<?php
/* @var $this EdcstockController */
/* @var $model EdcStock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'edc-stock-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id'); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'supplier'); ?>
		<?php echo $form->textField($model,'supplier',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'supplier'); ?>
	</div>-->
	
	<div class="row">
		<?php echo $form->labelEx($model,'supplier'); ?>
		<?php //echo $form->textField($model,'VENDOR',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->dropDownList($model,'supplier', CHtml::listData($supplier,'VENDOR_NAME','VENDOR_NAME'), array('prompt'=>'Select Supplier')); ?>
		<?php echo $form->error($model,'supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_qty'); ?>
		<?php echo $form->textField($model,'stock_qty'); ?>
		<?php echo $form->error($model,'stock_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entry_date'); ?>
		<?php //echo $form->textField($model,'entry_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'name'=>'EdcStock[entry_date]',
						'model'=>$model,
						'value'=>$model->entry_date,
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
		<?php echo $form->error($model,'entry_date'); ?>
	</div>

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'bal_qty'); ?>
		<?php echo $form->textField($model,'bal_qty'); ?>
		<?php echo $form->error($model,'bal_qty'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'af1'); ?>
		<?php echo $form->textField($model,'af1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'af1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'af2'); ?>
		<?php echo $form->textField($model,'af2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'af2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
		<?php echo $form->error($model,'date_modified'); ?>
	</div>
-->
	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Add Stock' : 'Update Stock'); ?>
		<?php echo CHtml::submitButton('',array('class'=>'submit-login')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->