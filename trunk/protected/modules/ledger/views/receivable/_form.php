<?php
/* @var $this JournalController */
/* @var $model Journal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'journal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'journal_number'); ?>
		<?php echo $form->textField($model,'journal_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'journal_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'journal_date'); ?>
		<?php echo $form->textField($model,'journal_date'); ?>
		<?php echo $form->error($model,'journal_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doc_number'); ?>
		<?php echo $form->textField($model,'doc_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'doc_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doc_duedate'); ?>
		<?php echo $form->textField($model,'doc_duedate'); ?>
		<?php echo $form->error($model,'doc_duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'journal_value'); ?>
		<?php echo $form->textField($model,'journal_value',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'journal_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
		<?php echo $form->error($model,'department_id'); ?>
	</div>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'journal_value_real'); ?>
		<?php echo $form->textField($model,'journal_value_real',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'journal_value_real'); ?>
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
		<?php echo $form->labelEx($model,'account_id'); ?>
		<?php echo $form->textField($model,'account_id'); ?>
		<?php echo $form->error($model,'account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id'); ?>
		<?php echo $form->error($model,'order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_rate'); ?>
		<?php echo $form->textField($model,'currency_rate',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'currency_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posted'); ?>
		<?php echo $form->textField($model,'posted'); ?>
		<?php echo $form->error($model,'posted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment'); ?>
		<?php echo $form->textField($model,'payment'); ?>
		<?php echo $form->error($model,'payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'closing'); ?>
		<?php echo $form->textField($model,'closing'); ?>
		<?php echo $form->error($model,'closing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doc_type'); ?>
		<?php echo $form->textField($model,'doc_type'); ?>
		<?php echo $form->error($model,'doc_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doc_status'); ?>
		<?php echo $form->textField($model,'doc_status'); ?>
		<?php echo $form->error($model,'doc_status'); ?>
	</div>

    -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->