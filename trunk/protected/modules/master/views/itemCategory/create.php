<?php
$this->breadcrumbs=array(
	'Item Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemCategory', 'url'=>array('index')),
	array('label'=>'Manage ItemCategory', 'url'=>array('admin')),
);
?>

<h1>Create ItemCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>