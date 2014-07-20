<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);

?>

<h1>Usuario <?php echo $model->Usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Usuario',		
		'Telefono',
		'Correo_Electronico',
		'Direccion',
		'Unidades_Credito_Aprobadas',
		'Servicio_Comunitario',
		'Ultimo_Lapso_Academico',
		'foto',
		'session',
	),
)); ?>

<br /><b><label>ROLES:</label></b><br />

<?php

	$items = T08UsuarioHasRol::model()->findAllByAttributes(array('M05_id'=>$model->id));
	
	foreach($items as $item)
	{
		$rol = P01Rol::model()->findByPk($item->P01_id);
		echo '<br/><label>   '.$rol->Descripcion.'</label>';	
	}

	
?>
