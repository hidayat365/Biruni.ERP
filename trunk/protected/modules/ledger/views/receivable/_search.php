<?php
/* @var $this JournalController */
/* @var $model Journal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'journal_number'); ?>
		<?php echo $form->textField($model,'journal_number',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'journal_date'); ?>
		<?php echo $form->textField($model,'journal_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'journal_value'); ?>
		<?php echo $form->textField($model,'journal_value',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'journal_value_real'); ?>
		<?php echo $form->textField($model,'journal_value_real',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified_on'); ?>
		<?php echo $form->textField($model,'modified_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_id'); ?>
		<?php echo $form->textField($model,'account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency_rate'); ?>
		<?php echo $form->textField($model,'currency_rate',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posted'); ?>
		<?php echo $form->textField($model,'posted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment'); ?>
		<?php echo $form->textField($model,'payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'closing'); ?>
		<?php echo $form->textField($model,'closing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_type'); ?>
		<?php echo $form->textField($model,'doc_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_status'); ?>
		<?php echo $form->textField($model,'doc_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_number'); ?>
		<?php echo $form->textField($model,'doc_number',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_duedate'); ?>
		<?php echo $form->textField($model,'doc_duedate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->