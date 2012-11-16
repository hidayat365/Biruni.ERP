<?php
/* @var $this ProjectCategoryController */
/* @var $model ProjectCategory */

$this->breadcrumbs=array(
	'Project Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectCategory', 'url'=>array('index')),
	array('label'=>'Create ProjectCategory', 'url'=>array('create')),
	array('label'=>'View ProjectCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectCategory', 'url'=>array('admin')),
);
?>

<h1>Update ProjectCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>