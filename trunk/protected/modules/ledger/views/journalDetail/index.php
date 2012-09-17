<?php
/* @var $this JournalDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Journal Details',
);

$this->menu=array(
	array('label'=>'Create JournalDetail', 'url'=>array('create')),
	array('label'=>'Manage JournalDetail', 'url'=>array('admin')),
);
?>

<h1>Journal Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
