<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List M05Usuario', 'url'=>array('index')),
	array('label'=>'Manage M05Usuario', 'url'=>array('admin')),
);
?>

<h1>Create M05Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>