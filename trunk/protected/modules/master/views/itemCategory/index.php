<?php
$this->breadcrumbs=array(
	'Item Categories',
);

$this->menu=array(
	array('label'=>'Create ItemCategory', 'url'=>array('create')),
	array('label'=>'Manage ItemCategory', 'url'=>array('admin')),
);
?>

<h1>Item Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
