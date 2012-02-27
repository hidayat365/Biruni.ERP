<?php
$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Companies', 'url'=>array('index')),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
);
?>

<h1>Create Companies</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>