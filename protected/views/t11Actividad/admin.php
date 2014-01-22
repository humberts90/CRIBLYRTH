<?php
/* @var $this T11ActividadController */
/* @var $model T11Actividad */

$this->breadcrumbs=array(
	'T11 Actividads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List T11Actividad', 'url'=>array('index')),
	array('label'=>'Create T11Actividad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#t11-actividad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage T11 Actividads</h1>

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
	'id'=>'t11-actividad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'M04_Pasantia_id',
		'Descripcion',
		'Fecha_inicio',
		'Fecha_Fin',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
