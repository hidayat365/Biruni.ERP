<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_on')); ?>:</b>
	<?php echo CHtml::encode($data->modified_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_office')); ?>:</b>
	<?php echo CHtml::encode($data->phone_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_alternate')); ?>:</b>
	<?php echo CHtml::encode($data->phone_alternate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_fax')); ?>:</b>
	<?php echo CHtml::encode($data->phone_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employees')); ?>:</b>
	<?php echo CHtml::encode($data->employees); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('annual_revenue')); ?>:</b>
	<?php echo CHtml::encode($data->annual_revenue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry')); ?>:</b>
	<?php echo CHtml::encode($data->industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ownership')); ?>:</b>
	<?php echo CHtml::encode($data->ownership); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_street')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_city')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_state')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_postalcode')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_postalcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_country')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address_street')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address_city')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address_state')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address_postalcode')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address_postalcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address_country')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address_country); ?>
	<br />

	*/ ?>

</div>