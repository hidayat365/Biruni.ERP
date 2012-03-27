<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Companies'=>array('index'),
	'Suppliers',
);

$this->menu=array(
	array('label'=>'Create Supplier', 'url'=>array('create')),
	array('label'=>'Manage Supplier', 'url'=>array('/master/company/supplier')),
);
?>

<h1>Supplier List</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

&nbsp;
