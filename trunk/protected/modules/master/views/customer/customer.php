<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Customers'=>array('index'),
	'Customers',
);

$this->menu=array(
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Manage Customers', 'url'=>array('/master/customer/customer')),
);
?>

<h1>Customer List</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
