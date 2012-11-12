<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Projects',
);

$this->menu=array(
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('projects-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Projects</h1>
<div class="flash-success">Daftar Project/Training sebagai referensi data AR/AP</div>
<div class="flash-notice">This is very very early version and not fully functional yet</div>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'projects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'code',
		'name',
		array(
			'header'=>'Jenis Training',
            'filter' => CHtml::listData(ProjectCategory::model()->findAll(), 'id', 'name'), 
			'value'=>'ProjectCategory::model()->findByPk($data->category_id)->name',
		),
		array(
			'header'=>'Program',
            'filter' => CHtml::listData(ProjectType::model()->findAll(), 'id', 'name'), 
			'value'=>'ProjectType::model()->findByPk($data->type_id)->name',
		),
		/*
		'id',
		'parent_id',
		'branch_id',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
)); ?>
