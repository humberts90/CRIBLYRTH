<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List M05Usuario', 'url'=>array('index')),
	array('label'=>'Create M05Usuario', 'url'=>array('create')),
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

<h1>Manage M05 Usuarios</h1>

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
	'id'=>'m05-usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Usuario',
		'Clave',
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
		),
	),
)); ?>
