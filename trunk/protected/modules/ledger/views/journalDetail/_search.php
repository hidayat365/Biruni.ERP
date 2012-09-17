<?php
/* @var $this JournalDetailController */
/* @var $model JournalDetail */
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
		<?php echo $form->label($model,'journal_id'); ?>
		<?php echo $form->textField($model,'journal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_id'); ?>
		<?php echo $form->textField($model,'account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debet'); ?>
		<?php echo $form->textField($model,'debet',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debet_real'); ?>
		<?php echo $form->textField($model,'debet_real',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit'); ?>
		<?php echo $form->textField($model,'credit',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit_real'); ?>
		<?php echo $form->textField($model,'credit_real',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_price'); ?>
		<?php echo $form->textField($model,'unit_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax1_pct'); ?>
		<?php echo $form->textField($model,'tax1_pct',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax2_pct'); ?>
		<?php echo $form->textField($model,'tax2_pct',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->