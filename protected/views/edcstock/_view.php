<?php
/* @var $this EdcstockController */
/* @var $data EdcStock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier')); ?>:</b>
	<?php echo CHtml::encode($data->supplier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_qty')); ?>:</b>
	<?php echo CHtml::encode($data->stock_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entry_date')); ?>:</b>
	<?php echo CHtml::encode($data->entry_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bal_qty')); ?>:</b>
	<?php echo CHtml::encode($data->bal_qty); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('af1')); ?>:</b>
	<?php echo CHtml::encode($data->af1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('af2')); ?>:</b>
	<?php echo CHtml::encode($data->af2); ?>
	<br />
	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />


</div>