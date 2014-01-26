<?php
/* @var $this T03ActaController */
/* @var $model T03Acta */

$this->breadcrumbs=array(
	'T03 Actas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List T03Acta', 'url'=>array('index')),
	array('label'=>'Create T03Acta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#t03-acta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage T03 Actas</h1>

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
	'id'=>'t03-acta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'M05_id',
		'Descripcion',
		'Fecha',
		'Anexo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>