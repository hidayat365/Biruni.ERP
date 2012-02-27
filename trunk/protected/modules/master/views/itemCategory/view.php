<?php
$this->breadcrumbs=array(
	'Item Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ItemCategory', 'url'=>array('index')),
	array('label'=>'Create ItemCategory', 'url'=>array('create')),
	array('label'=>'Update ItemCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ItemCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemCategory', 'url'=>array('admin')),
);
?>

<h1>View ItemCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'name',
		'parent_id',
		'branch_id',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
	),
)); ?>
