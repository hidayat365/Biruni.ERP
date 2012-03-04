<?php
$this->breadcrumbs=array(
	'Order Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderCategory', 'url'=>array('index')),
	array('label'=>'Create OrderCategory', 'url'=>array('create')),
	array('label'=>'View OrderCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrderCategory', 'url'=>array('admin')),
);
?>

<h1>Update OrderCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>