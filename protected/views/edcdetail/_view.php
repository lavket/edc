<?php
/* @var $this EdcdetailController */
/* @var $data Edc_Detail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TID_NO')); ?>:</b>
	<?php echo CHtml::encode($data->TID_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SERIAL_NO')); ?>:</b>
	<?php echo CHtml::encode($data->SERIAL_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOCATION')); ?>:</b>
	<?php echo CHtml::encode($data->LOCATION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISAMEX')); ?>:</b>
	<?php echo CHtml::encode($data->ISAMEX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AMEX_NO')); ?>:</b>
	<?php echo CHtml::encode($data->AMEX_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SIM_CARD')); ?>:</b>
	<?php echo CHtml::encode($data->SIM_CARD); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TERMINAL_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->TERMINAL_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VENDOR')); ?>:</b>
	<?php echo CHtml::encode($data->VENDOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY')); ?>:</b>
	<?php echo CHtml::encode($data->COMPANY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REMARKS')); ?>:</b>
	<?php echo CHtml::encode($data->REMARKS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_CREATED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_MODIFIED')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_MODIFIED); ?>
	<br />

	*/ ?>

</div>