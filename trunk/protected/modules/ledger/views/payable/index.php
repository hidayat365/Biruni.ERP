<?php
/* @var $this JournalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accounts Payable',
);

$this->menu=array(
	array('label'=>'Create Accounts Payable', 'url'=>array('create')),
	array('label'=>'Manage Accounts Payable', 'url'=>array('admin')),
);
?>

<h1>Accounts Payable</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
