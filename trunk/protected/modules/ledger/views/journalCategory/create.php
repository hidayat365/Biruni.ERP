<?php
/* @var $this JournalCategoryController */
/* @var $model JournalCategory */

$this->breadcrumbs=array(
	'Journal Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JournalCategory', 'url'=>array('index')),
	array('label'=>'Manage JournalCategory', 'url'=>array('admin')),
);
?>

<h1>Create JournalCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>