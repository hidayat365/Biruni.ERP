<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id'); ?>
		<?php echo $form->error($model,'order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_id'); ?>
		<?php echo $form->textField($model,'detail_id'); ?>
		<?php echo $form->error($model,'detail_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disc_pct'); ?>
		<?php echo $form->textField($model,'disc_pct'); ?>
		<?php echo $form->error($model,'disc_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disc_amount'); ?>
		<?php echo $form->textField($model,'disc_amount'); ?>
		<?php echo $form->error($model,'disc_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax1_pct'); ?>
		<?php echo $form->textField($model,'tax1_pct'); ?>
		<?php echo $form->error($model,'tax1_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax2_pct'); ?>
		<?php echo $form->textField($model,'tax2_pct'); ?>
		<?php echo $form->error($model,'tax2_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->