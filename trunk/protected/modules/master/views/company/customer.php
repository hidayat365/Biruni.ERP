<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Companies'=>array('index'),
	'Companies',
);

$this->menu=array(
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Manage Companies', 'url'=>array('/master/company')),
);
?>

<h1>Company List</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
