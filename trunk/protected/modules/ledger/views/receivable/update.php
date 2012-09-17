<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Accounts Receivable'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accounts Receivable', 'url'=>array('index')),
	array('label'=>'Create Accounts Receivable', 'url'=>array('create')),
	array('label'=>'View Accounts Receivable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Accounts Receivable', 'url'=>array('admin')),
);
?>

<h1>Update Accounts Receivable <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>