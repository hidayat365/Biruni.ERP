<?php
/* @var $this JournalDetailController */
/* @var $model JournalDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'journal-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'journal_id'); ?>
		<?php echo $form->textField($model,'journal_id'); ?>
		<?php echo $form->error($model,'journal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_id'); ?>
		<?php echo $form->textField($model,'account_id'); ?>
		<?php echo $form->error($model,'account_id'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
		<?php echo $form->error($model,'department_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debet'); ?>
		<?php echo $form->textField($model,'debet',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'debet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debet_real'); ?>
		<?php echo $form->textField($model,'debet_real',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'debet_real'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit'); ?>
		<?php echo $form->textField($model,'credit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit_real'); ?>
		<?php echo $form->textField($model,'credit_real',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'credit_real'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_price'); ?>
		<?php echo $form->textField($model,'unit_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'unit_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax1_pct'); ?>
		<?php echo $form->textField($model,'tax1_pct',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tax1_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax2_pct'); ?>
		<?php echo $form->textField($model,'tax2_pct',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tax2_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->