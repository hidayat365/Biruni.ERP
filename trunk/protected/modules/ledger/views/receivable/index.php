<?php
/* @var $this JournalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accounts Receivable',
);

$this->menu=array(
	array('label'=>'Create Accounts Receivable', 'url'=>array('create')),
	array('label'=>'Manage Accounts Receivable', 'url'=>array('admin')),
);
?>

<h1>Accounts Receivable</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
