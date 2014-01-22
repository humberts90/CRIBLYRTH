<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List M05Usuario', 'url'=>array('index')),
	array('label'=>'Create M05Usuario', 'url'=>array('create')),
	array('label'=>'Update M05Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete M05Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage M05Usuario', 'url'=>array('admin')),
);

?>

<h1>View M05Usuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Usuario',
		'Clave',
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
