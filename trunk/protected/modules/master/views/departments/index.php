<?php
$this->breadcrumbs=array(
	'Departments',
);

$this->menu=array(
	array('label'=>'Create Departments', 'url'=>array('create')),
	array('label'=>'Manage Departments', 'url'=>array('admin')),
);
?>

<h1>Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
