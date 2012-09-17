<?php
/* @var $this JournalController */
/* @var $model Journal */

$this->breadcrumbs=array(
	'Journals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Journal', 'url'=>array('index')),
	array('label'=>'Create Journal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('journal-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Journals</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'journal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'journal_number',
		'journal_date',
		'journal_value',
		'journal_value_real',
		'description',
		/*
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
		'parent_id',
		'branch_id',
		'company_id',
		'account_id',
		'project_id',
		'department_id',
		'order_id',
		'category_id',
		'currency_id',
		'currency_rate',
		'posted',
		'payment',
		'closing',
		'doc_type',
		'doc_status',
		'doc_number',
		'doc_duedate',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>