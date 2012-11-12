<?php
/* @var $this CompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Companies',
);

$this->menu=array(
	array('label'=>'Create Company', 'url'=>array('/master/company/create','type'=>'company')),
	array('label'=>'Create Supplier', 'url'=>array('/master/company/create','type'=>'supplier')),
);
?>

<h1>Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
