<?php
/* @var $this EdcdetailController */
/* @var $model Edc_Detail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php //echo $form->label($model,'ID'); ?>
		<?php //echo $form->textField($model,'ID'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'TID_NO'); ?>
		<?php echo $form->textField($model,'TID_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SERIAL_NO'); ?>
		<?php echo $form->textField($model,'SERIAL_NO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LOCATION'); ?>
		<?php echo $form->textField($model,'LOCATION',array('size'=>60,'maxlength'=>100)); ?>
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
		<?php echo $form->dropDownList($model,'ISAMEX',array('0' => 'NA', '1' => 'AMEX'), array('prompt'=>'All')); ?>
		<?php echo $form->error($model,'ISAMEX'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'AMEX_NO'); ?>
		<?php echo $form->textField($model,'AMEX_NO'); ?>
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
		<?php echo $form->dropDownList($model,'STATUS', CHtml::listData($terminal_status,'STATUS_NAME','STATUS_NAME'), array('prompt'=>'Select Status')); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REMARKS'); ?>
		<?php echo $form->textField($model,'REMARKS',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->label($model,'DATE_CREATED'); ?>
		<?php //echo $form->textField($model,'DATE_CREATED'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'DATE_MODIFIED'); ?>
		<?php //echo $form->textField($model,'DATE_MODIFIED'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->