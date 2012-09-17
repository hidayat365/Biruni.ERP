<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Accounts Payable'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accounts Payable', 'url'=>array('index')),
	array('label'=>'Manage Accounts Payable', 'url'=>array('admin')),
);
?>

<h1>Create Accounts Receivable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>