<?php
$this->breadcrumbs=array(
	'Item Categories',
);

$this->menu=array(
	array('label'=>'Manage Branches', 'url'=>array('/master/branch')),
	array('label'=>'Manage Departments', 'url'=>array('/master/department')),
	array('label'=>'Manage Projects', 'url'=>array('/master/project')),
	array('label'=>'Manage Customers', 'url'=>array('/master/company/customer')),
	array('label'=>'Manage Suppliers', 'url'=>array('/master/company/supplier')),
	array('label'=>'Manage Accounts', 'url'=>array('/master/account')),
	array('label'=>'Manage Item Categories', 'url'=>array('/master/itemcategory')),
	array('label'=>'Manage Items', 'url'=>array('/master/item')),
);
?>

<h1>Item Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
