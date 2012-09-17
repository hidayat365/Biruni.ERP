<?php
/* @var $this JournalController */
/* @var $data Journal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_number')); ?>:</b>
	<?php echo CHtml::encode($data->journal_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_date')); ?>:</b>
	<?php echo CHtml::encode($data->journal_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_value')); ?>:</b>
	<?php echo CHtml::encode($data->journal_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_value_real')); ?>:</b>
	<?php echo CHtml::encode($data->journal_value_real); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_on')); ?>:</b>
	<?php echo CHtml::encode($data->modified_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_id')); ?>:</b>
	<?php echo CHtml::encode($data->account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_id')); ?>:</b>
	<?php echo CHtml::encode($data->department_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_rate')); ?>:</b>
	<?php echo CHtml::encode($data->currency_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posted')); ?>:</b>
	<?php echo CHtml::encode($data->posted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment')); ?>:</b>
	<?php echo CHtml::encode($data->payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closing')); ?>:</b>
	<?php echo CHtml::encode($data->closing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_type')); ?>:</b>
	<?php echo CHtml::encode($data->doc_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_status')); ?>:</b>
	<?php echo CHtml::encode($data->doc_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_number')); ?>:</b>
	<?php echo CHtml::encode($data->doc_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_duedate')); ?>:</b>
	<?php echo CHtml::encode($data->doc_duedate); ?>
	<br />

	*/ ?>

</div>