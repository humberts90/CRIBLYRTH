<?php
/* @var $this M06EmpresaController */
/* @var $model M06Empresa */

$this->breadcrumbs=array(
	'M06 Empresas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List M06Empresa', 'url'=>array('index')),
	array('label'=>'Create M06Empresa', 'url'=>array('create')),
	array('label'=>'Update M06Empresa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete M06Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage M06Empresa', 'url'=>array('admin')),
);
?>

<h1>View M06Empresa #<?php echo $model->id; ?></h1>

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
	),
)); ?>
