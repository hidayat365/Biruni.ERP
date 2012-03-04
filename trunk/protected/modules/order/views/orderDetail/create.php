<?php
$this->breadcrumbs=array(
	'Order Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderDetail', 'url'=>array('index')),
	array('label'=>'Manage OrderDetail', 'url'=>array('admin')),
);
?>

<h1>Create OrderDetail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>