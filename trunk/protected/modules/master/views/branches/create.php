<?php
$this->breadcrumbs=array(
	'Branches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Branches', 'url'=>array('index')),
	array('label'=>'Manage Branches', 'url'=>array('admin')),
);
?>

<h1>Create Branches</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>