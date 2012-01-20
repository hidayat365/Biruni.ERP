<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Accounts',
);

$this->menu=array(
	array('label'=>'Manage Branches', 'url'=>array('/master/branches')),
	array('label'=>'Manage Departments', 'url'=>array('/master/departments')),
	array('label'=>'Manage Projects', 'url'=>array('/master/projects')),
	array('label'=>'Manage Customers', 'url'=>array('/master/companies/customer')),
	array('label'=>'Manage Suppliers', 'url'=>array('/master/companies/supplier')),
	array('label'=>'Manage Accounts', 'url'=>array('/master/accounts')),
);
?>

<h1>Accounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
