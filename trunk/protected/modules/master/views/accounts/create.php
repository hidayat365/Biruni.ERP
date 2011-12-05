<?php
$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
);
?>

<h1>Create Accounts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>