<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
		<?php echo $form->error($model,'company_id'); ?>
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
		<?php echo $form->labelEx($model,'completed'); ?>
		<?php echo $form->textField($model,'completed'); ?>
		<?php echo $form->error($model,'completed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_num'); ?>
		<?php echo $form->textField($model,'order_num',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'order_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_date'); ?>
		<?php echo $form->textField($model,'order_date'); ?>
		<?php echo $form->error($model,'order_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'required_date'); ?>
		<?php echo $form->textField($model,'required_date'); ?>
		<?php echo $form->error($model,'required_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks1'); ?>
		<?php echo $form->textArea($model,'remarks1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks2'); ?>
		<?php echo $form->textArea($model,'remarks2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks3'); ?>
		<?php echo $form->textArea($model,'remarks3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks4'); ?>
		<?php echo $form->textArea($model,'remarks4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks5'); ?>
		<?php echo $form->textArea($model,'remarks5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->