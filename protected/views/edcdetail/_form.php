<?php
/* @var $this EdcdetailController */
/* @var $model Edc_Detail */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 1.0}, 8000).fadeOut("slow");',
       CClientScript::POS_READY
    );
 if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div><?php
 endif; ?>
 

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'edc--detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TID_NO'); ?>
		<?php //echo $form->textField($model,'TID_NO'); ?>
		<?php //echo $form->error($model,'TID_NO'); ?>
	</div>-->
	
	<div class="row">
		<?php echo $form->labelEx($model,'HDFC_TID_NO'); ?>
		<?php echo $form->textField($model,'HDFC_TID_NO'); ?>
		<?php echo $form->error($model,'HDFC_TID_NO'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'MID_NO'); ?>
		<?php echo $form->textField($model,'MID_NO'); ?>
		<?php echo $form->error($model,'MID_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SERIAL_NO'); ?>
		<?php echo $form->textField($model,'SERIAL_NO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SERIAL_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOCATION'); ?>
		<?php echo $form->textField($model,'LOCATION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'LOCATION'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'DEPARTMENT'); ?>
		<?php //echo $form->textField($model,'SIM_CARD',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->dropDownList($model,'DEPARTMENT', CHtml::listData($department,'DEPARTMENT_NAME','DEPARTMENT_NAME'), array('prompt'=>'Select Department')); ?>
		<?php echo $form->error($model,'DEPARTMENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISAMEX'); ?>
		<?php //echo $form->textField($model,'ISAMEX',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->dropDownList($model,'ISAMEX',array('0' => 'NA', '1' => 'AMEX')); ?>
		<?php echo $form->error($model,'ISAMEX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AMEX_NO'); ?>
		<?php echo $form->textField($model,'AMEX_NO'); ?>
		<?php echo $form->error($model,'AMEX_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SIM_CARD'); ?>
		<?php //echo $form->textField($model,'SIM_CARD',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->dropDownList($model,'SIM_CARD', CHtml::listData($sim,'SIM_NAME','SIM_NAME'), array('prompt'=>'Select Sim Card')); ?>
		<?php echo $form->error($model,'SIM_CARD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TERMINAL_TYPE'); ?>
		<?php //echo $form->textField($model,'TERMINAL_TYPE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->dropDownList($model,'TERMINAL_TYPE', CHtml::listData($terminal_type,'TERMINAL_NAME','TERMINAL_NAME'), array('prompt'=>'Select Terminal Type')); ?>
		<?php echo $form->error($model,'TERMINAL_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VENDOR'); ?>
		<?php //echo $form->textField($model,'VENDOR',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->dropDownList($model,'VENDOR', CHtml::listData($vendor,'VENDOR_NAME','VENDOR_NAME'), array('prompt'=>'Select Vendor')); ?>
		<?php echo $form->error($model,'VENDOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPANY'); ?>
		<?php //echo $form->textField($model,'COMPANY',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->dropDownList($model,'COMPANY', CHtml::listData($company,'COMPANY_NAME','COMPANY_NAME'), array('prompt'=>'Select Company')); ?>
		<?php echo $form->error($model,'COMPANY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php //echo $form->textField($model,'STATUS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->dropDownList($model,'STATUS', CHtml::listData($terminal_status,'STATUS_NAME','STATUS_NAME')); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REMARKS'); ?>
		<?php echo $form->textArea($model,'REMARKS',array('size'=>1000,'maxlength'=>2000,'rows' => 50, 'cols' => 100,'style'=>'width: 499px; height: 137px;')); ?>
		<?php echo $form->error($model,'REMARKS'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'DATE_CREATED'); ?>
		<?php //echo $form->textField($model,'DATE_CREATED'); ?>
		<?php //echo $form->error($model,'DATE_CREATED'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'DATE_MODIFIED'); ?>
		<?php //echo $form->textField($model,'DATE_MODIFIED'); ?>
		<?php //echo $form->error($model,'DATE_MODIFIED'); ?>
	</div>-->
	
	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::submitButton('',array('class'=>'submit-login')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->