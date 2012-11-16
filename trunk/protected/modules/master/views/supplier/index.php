<?php
/* @var $this CustomerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Suppliers',
);

$this->menu=array(
	array('label'=>'Create Customer', 'url'=>array('/master/customer/create')),
	array('label'=>'Create Supplier', 'url'=>array('/master/supplier/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('Supplier-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Suppliers</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Supplier-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'code',
		'name',
		'phone_office',
		'phone_alternate',
		'billing_address_city',
		'billing_address_state',
		/*
		'id',
		'parent_id',
		'branch_id',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
		'active',
		'type',
		'phone_fax',
		'employees',
		'annual_revenue',
		'industry',
		'ownership',
		'website',
		'billing_address_street',
		'billing_address_postalcode',
		'billing_address_country',
		'shipping_address_street',
		'shipping_address_city',
		'shipping_address_state',
		'shipping_address_postalcode',
		'shipping_address_country',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
