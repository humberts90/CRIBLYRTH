<?php
/* @var $this M03TesisController */
/* @var $model M03Tesis */

$this->breadcrumbs=array(
	'M03 Tesises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List M03Tesis', 'url'=>array('index')),
	array('label'=>'Create M03Tesis', 'url'=>array('create')),
	array('label'=>'Update M03Tesis', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete M03Tesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage M03Tesis', 'url'=>array('admin')),
);
?>

<h1>View M03Tesis #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Titulo',
		'Carta_Tutor',
		'Introduccion',
		'Planteamiento_Problema',
		'Objetivo_General',
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
	),
)); ?>
