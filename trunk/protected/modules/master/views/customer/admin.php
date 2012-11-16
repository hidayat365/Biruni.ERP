<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('Customer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Customers</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Customer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'code',
		'name',
		'phone_office',
		'phone_alternate',
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
		'billing_address_city',
		'billing_address_state',
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
