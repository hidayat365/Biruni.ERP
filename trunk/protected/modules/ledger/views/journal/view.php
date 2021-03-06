<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Journals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Journal', 'url'=>array('index')),
	array('label'=>'Create Journal', 'url'=>array('create')),
	array('label'=>'Update Journal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Journal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Journal', 'url'=>array('admin')),
);
?>

<h1>View Journal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'journal_number',
		'journal_date',
		'journal_value',
		'journal_value_real',
		'description',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
		'parent_id',
		'branch_id',
		'company_id',
		'account_id',
		'project_id',
		'department_id',
		'order_id',
		'category_id',
		'currency_id',
		'currency_rate',
		'posted',
		'payment',
		'closing',
		'doc_type',
		'doc_status',
		'doc_number',
		'doc_duedate',
	),
)); ?>
