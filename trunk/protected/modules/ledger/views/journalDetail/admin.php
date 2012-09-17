<?php
/* @var $this JournalDetailController */
/* @var $model JournalDetail */

$this->breadcrumbs=array(
	'Journal Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JournalDetail', 'url'=>array('index')),
	array('label'=>'Create JournalDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('journal-detail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Journal Details</h1>

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
	'id'=>'journal-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'journal_id',
		'account_id',
		'item_id',
		'order_id',
		'department_id',
		/*
		'project_id',
		'debet',
		'debet_real',
		'credit',
		'credit_real',
		'quantity',
		'unit_price',
		'tax1_pct',
		'tax2_pct',
		'remarks',
		'description',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
