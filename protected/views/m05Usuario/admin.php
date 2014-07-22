<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(

	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#m05-usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar  Usuarios</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'m05-usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Usuario',
		'Correo_Electronico',
		/*
		'Telefono',
		'Correo_Electronico',
		'Direccion',
		'Unidades_Credito_Aprobadas',
		'Servicio_Comunitario',
		'Ultimo_Lapso_Academico',
		'foto',
		'session',
		*/
		array(
			'class'=>'CButtonColumn',
			'deleteButtonUrl'=>'Yii::app()->createUrl("m05Usuario/borrar?id=$data->id" )', 
		),
	),
)); ?>
