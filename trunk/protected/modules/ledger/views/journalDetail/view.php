<?php
/* @var $this JournalDetailController */
/* @var $model JournalDetail */

$this->breadcrumbs=array(
	'Journal Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JournalDetail', 'url'=>array('index')),
	array('label'=>'Create JournalDetail', 'url'=>array('create')),
	array('label'=>'Update JournalDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JournalDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JournalDetail', 'url'=>array('admin')),
);
?>

<h1>View JournalDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'journal_id',
		'account_id',
		'item_id',
		'order_id',
		'department_id',
		'project_id',
		'debet',
		'debet_real',
		'credit',
		'credit_real',
		'quantity',
		'unit_price',
		'tax1_pct',
		'tax2_pct',
		'remarks',
		'description',
	),
)); ?>
