<?php
/* @var $this EdcissueController */
/* @var $data EdcIssue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_qty')); ?>:</b>
	<?php echo CHtml::encode($data->issue_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_date')); ?>:</b>
	<?php echo CHtml::encode($data->issue_date); ?>
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