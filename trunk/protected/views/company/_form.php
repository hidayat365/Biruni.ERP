<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
		<?php echo $form->error($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by'); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_on'); ?>
		<?php echo $form->textField($model,'modified_on'); ?>
		<?php echo $form->error($model,'modified_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_office'); ?>
		<?php echo $form->textField($model,'phone_office',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_alternate'); ?>
		<?php echo $form->textField($model,'phone_alternate',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone_alternate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_fax'); ?>
		<?php echo $form->textField($model,'phone_fax',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employees'); ?>
		<?php echo $form->textField($model,'employees'); ?>
		<?php echo $form->error($model,'employees'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'annual_revenue'); ?>
		<?php echo $form->textField($model,'annual_revenue',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'annual_revenue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'industry'); ?>
		<?php echo $form->textField($model,'industry',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'industry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ownership'); ?>
		<?php echo $form->textField($model,'ownership',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ownership'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_street'); ?>
		<?php echo $form->textField($model,'billing_address_street',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'billing_address_street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_city'); ?>
		<?php echo $form->textField($model,'billing_address_city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'billing_address_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_state'); ?>
		<?php echo $form->textField($model,'billing_address_state',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'billing_address_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_postalcode'); ?>
		<?php echo $form->textField($model,'billing_address_postalcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'billing_address_postalcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_country'); ?>
		<?php echo $form->textField($model,'billing_address_country',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'billing_address_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_address_street'); ?>
		<?php echo $form->textField($model,'shipping_address_street',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'shipping_address_street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_address_city'); ?>
		<?php echo $form->textField($model,'shipping_address_city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'shipping_address_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_address_state'); ?>
		<?php echo $form->textField($model,'shipping_address_state',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'shipping_address_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_address_postalcode'); ?>
		<?php echo $form->textField($model,'shipping_address_postalcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'shipping_address_postalcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_address_country'); ?>
		<?php echo $form->textField($model,'shipping_address_country',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'shipping_address_country'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->