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

<h1> Actividades</h1>



</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'t11-actividad-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		
		'Descripcion',
		'Fecha_inicio',
		'Fecha_Fin',
		'M02_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
