<?php
$this->breadcrumbs=array(
	'Order Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderDetail', 'url'=>array('index')),
	array('label'=>'Create OrderDetail', 'url'=>array('create')),
	array('label'=>'View OrderDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrderDetail', 'url'=>array('admin')),
);
?>

<h1>Update OrderDetail <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>