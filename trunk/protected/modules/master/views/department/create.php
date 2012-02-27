<?php
$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Departments', 'url'=>array('index')),
	array('label'=>'Manage Departments', 'url'=>array('admin')),
);
?>

<h1>Create Departments</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>