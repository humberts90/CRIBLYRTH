<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Usuario', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Nuevo Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>