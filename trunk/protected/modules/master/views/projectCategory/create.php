<?php
/* @var $this ProjectCategoryController */
/* @var $model ProjectCategory */

$this->breadcrumbs=array(
	'Project Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectCategory', 'url'=>array('index')),
	array('label'=>'Manage ProjectCategory', 'url'=>array('admin')),
);
?>

<h1>Create ProjectCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>