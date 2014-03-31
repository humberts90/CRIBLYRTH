<?php
/* @var $this M06EmpresaController */
/* @var $model M06Empresa */

$this->breadcrumbs=array(
	' Empresas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Empresas', 'url'=>array('index')),
	array('label'=>'Nueva Empresa', 'url'=>array('create')),
	array('label'=>'Actualizar Empresa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),

);
?>

<h1> Empresa <?php echo $model->Razon_Social; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'RIF',
		'Status',
		'Razon_Social',
		'Direccion',
		'Telefono_1',
		'Telefono_2',
		'Fax',
		'Correo',
		'Descripcion',
		'Sitio_Web',
		'P04_id',
		'P08_id',
		'P05_id',
		'P06_id',
		'P07_id',
	),
)); ?>
