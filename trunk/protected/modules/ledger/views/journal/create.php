<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Journals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Journal', 'url'=>array('index')),
	array('label'=>'Manage Journal', 'url'=>array('admin')),
);
?>

<h1>Create Journal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>