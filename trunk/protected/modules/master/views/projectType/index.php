<?php
/* @var $this ProjectTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Project Types',
);

$this->menu=array(
	array('label'=>'Create ProjectType', 'url'=>array('create')),
	array('label'=>'Manage ProjectType', 'url'=>array('admin')),
);
?>

<h1>Project Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
