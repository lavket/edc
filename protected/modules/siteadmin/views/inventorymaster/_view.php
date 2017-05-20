<?php
/* @var $this InventorymasterController */
/* @var $data InventoryMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WHEELCHAIR')); ?>:</b>
	<?php echo CHtml::encode($data->WHEELCHAIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCROLLER')); ?>:</b>
	<?php echo CHtml::encode($data->SCROLLER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->USER_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_CREATED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_MODIFIED')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_MODIFIED); ?>
	<br />


</div>