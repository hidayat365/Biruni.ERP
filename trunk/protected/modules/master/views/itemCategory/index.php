<?php
$this->breadcrumbs=array(
	'Item Categories',
);

$this->menu=array(
	array('label'=>'Create Item Category', 'url'=>array('create')),
	array('label'=>'Manage Item Categories', 'url'=>array('admin')),
);

?>

<h1>Item Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
