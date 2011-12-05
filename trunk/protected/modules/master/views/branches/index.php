<?php
$this->breadcrumbs=array(
	'Branches',
);

$this->menu=array(
	array('label'=>'Create Branches', 'url'=>array('create')),
	array('label'=>'Manage Branches', 'url'=>array('admin')),
);
?>

<h1>Branches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
