<?php
/* @var $this JournalDetailController */
/* @var $model JournalDetail */

$this->breadcrumbs=array(
	'Journal Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JournalDetail', 'url'=>array('index')),
	array('label'=>'Create JournalDetail', 'url'=>array('create')),
	array('label'=>'View JournalDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JournalDetail', 'url'=>array('admin')),
);
?>

<h1>Update JournalDetail <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>