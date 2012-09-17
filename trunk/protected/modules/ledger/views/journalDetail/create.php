<?php
/* @var $this JournalDetailController */
/* @var $model JournalDetail */

$this->breadcrumbs=array(
	'Journal Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JournalDetail', 'url'=>array('index')),
	array('label'=>'Manage JournalDetail', 'url'=>array('admin')),
);
?>

<h1>Create JournalDetail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>