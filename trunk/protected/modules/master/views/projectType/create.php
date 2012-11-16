<?php
/* @var $this ProjectTypeController */
/* @var $model ProjectType */

$this->breadcrumbs=array(
	'Project Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectType', 'url'=>array('index')),
	array('label'=>'Manage ProjectType', 'url'=>array('admin')),
);
?>

<h1>Create ProjectType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>