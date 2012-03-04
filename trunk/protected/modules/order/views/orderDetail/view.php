<?php
$this->breadcrumbs=array(
	'Order Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrderDetail', 'url'=>array('index')),
	array('label'=>'Create OrderDetail', 'url'=>array('create')),
	array('label'=>'Update OrderDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrderDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderDetail', 'url'=>array('admin')),
);
?>

<h1>View OrderDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'order_id',
		'detail_id',
		'quantity',
		'price',
		'disc_pct',
		'disc_amount',
		'tax1_pct',
		'tax2_pct',
		'remarks',
		'weight',
	),
)); ?>
