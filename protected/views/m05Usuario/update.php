<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Usuario', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Detalles de Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);

?>

<h1>Actualizar Usuario <?php echo $model->Usuario; ?></h1>

<?php 


$this->renderPartial('_form', array('model'=>$model)); ?>