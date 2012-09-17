<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Journals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Journal', 'url'=>array('index')),
	array('label'=>'Create Journal', 'url'=>array('create')),
	array('label'=>'View Journal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Journal', 'url'=>array('admin')),
);
?>

<h1>Update Journal <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>