<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Companies',
);

$this->menu=array(
	array('label'=>'Create Customer', 'url'=>array('/master/company/create','customer')),
	array('label'=>'Create Supplier', 'url'=>array('/master/company/create','supplier')),
);
?>

<h1>Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
