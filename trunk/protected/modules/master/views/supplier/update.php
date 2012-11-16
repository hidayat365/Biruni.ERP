<?php
/* @var $this CustomerController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Supplier', 'url'=>array('index')),
	array('label'=>'Create Supplier', 'url'=>array('create')),
	array('label'=>'View Supplier', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Supplier', 'url'=>array('admin')),
);
?>

<h1>Update Supplier <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>