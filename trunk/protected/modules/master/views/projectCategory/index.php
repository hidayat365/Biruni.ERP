<?php
/* @var $this ProjectCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Project Categories',
);

$this->menu=array(
	array('label'=>'Create ProjectCategory', 'url'=>array('create')),
	array('label'=>'Manage ProjectCategory', 'url'=>array('admin')),
);
?>

<h1>Project Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
