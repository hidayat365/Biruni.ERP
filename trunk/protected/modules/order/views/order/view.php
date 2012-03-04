<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Update Order', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
?>

<h1>View Order #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'branch_id',
		'category_id',
		'company_id',
		'department_id',
		'project_id',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
		'active',
		'completed',
		'order_num',
		'order_date',
		'required_date',
		'remarks1',
		'remarks2',
		'remarks3',
		'remarks4',
		'remarks5',
	),
)); ?>
