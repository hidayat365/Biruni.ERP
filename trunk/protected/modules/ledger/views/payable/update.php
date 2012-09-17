<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Accounts Payable'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accounts Payable', 'url'=>array('index')),
	array('label'=>'Create Accounts Payable', 'url'=>array('create')),
	array('label'=>'View Accounts Payable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Accounts Payable', 'url'=>array('admin')),
);
?>

<h1>Update Accounts Payable <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>