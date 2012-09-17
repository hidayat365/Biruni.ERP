<?php
/* @var $this JournalCategoryController */
/* @var $model JournalCategory */

$this->breadcrumbs=array(
	'Journal Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JournalCategory', 'url'=>array('index')),
	array('label'=>'Create JournalCategory', 'url'=>array('create')),
	array('label'=>'View JournalCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JournalCategory', 'url'=>array('admin')),
);
?>

<h1>Update JournalCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>