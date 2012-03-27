<?php
$this->breadcrumbs=array(
	'Order Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List OrderCategory', 'url'=>array('index')),
	array('label'=>'Create OrderCategory', 'url'=>array('create')),
	array('label'=>'Update OrderCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrderCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderCategory', 'url'=>array('admin')),
);
?>

<h1>View OrderCategory [<?php echo $model->code; ?>]</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'name',
		'active',
		/*
		'id',
		'parent_id',
		'branch_id',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
		*/
	),
)); ?>
