<?php
/* @var $this JournalCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Journal Categories',
);

$this->menu=array(
	array('label'=>'Create JournalCategory', 'url'=>array('create')),
	array('label'=>'Manage JournalCategory', 'url'=>array('admin')),
);
?>

<h1>Journal Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
