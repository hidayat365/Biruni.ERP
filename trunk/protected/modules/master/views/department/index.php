<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Departments',
);

$this->menu=array(
	array('label'=>'Create Department', 'url'=>array('create')),
	array('label'=>'Manage Department', 'url'=>array('admin')),
);

?>

<h1>Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
