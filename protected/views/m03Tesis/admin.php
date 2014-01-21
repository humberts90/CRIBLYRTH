<?php
/* @var $this M03TesisController */
/* @var $model M03Tesis */

$this->breadcrumbs=array(
	'M03 Tesises'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List M03Tesis', 'url'=>array('index')),
	array('label'=>'Create M03Tesis', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#m03-tesis-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage M03 Tesises</h1>

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
	'id'=>'m03-tesis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Titulo',
		'Carta_Tutor',
		'Introduccion',
		'Planteamiento_Problema',
		'Objetivo_General',
		/*
		'Objetivo_especifico',
		'Justificacion_Importancia',
		'Alcance_Delimitaciones',
		'Antecedentes',
		'Bases_Teoricas',
		'Bases_Legales',
		'Definicion_Terminos',
		'Enfoque_Investigacion',
		'Tipo_Nivel_Invesstigacion',
		'Diseno_Investigacion',
		'Poblacion_Muestra',
		'Tecnicas_Recoleccion_Datos',
		'Metodologias',
		'Referencias',
		'Fecha_Inscripcion',
		'Fecha_Aprobación',
		'Fecha_Defensa',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
