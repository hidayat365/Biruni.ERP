<?php
/* @var $this ProjectTypeController */
/* @var $model ProjectType */

$this->breadcrumbs=array(
	'Project Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectType', 'url'=>array('index')),
	array('label'=>'Create ProjectType', 'url'=>array('create')),
	array('label'=>'View ProjectType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectType', 'url'=>array('admin')),
);
?>

<h1>Update ProjectType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>