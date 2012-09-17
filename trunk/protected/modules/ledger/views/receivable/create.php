<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Accounts Receivable'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accounts Receivable', 'url'=>array('index')),
	array('label'=>'Manage Accounts Receivable', 'url'=>array('admin')),
);
?>

<h1>Create Accounts Receivable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>