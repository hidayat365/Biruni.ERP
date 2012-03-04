<?php
$this->breadcrumbs=array(
	'Order Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderCategory', 'url'=>array('index')),
	array('label'=>'Manage OrderCategory', 'url'=>array('admin')),
);
?>

<h1>Create OrderCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>