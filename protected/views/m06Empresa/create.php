<?php
/* @var $this M06EmpresaController */
/* @var $model M06Empresa */

$this->breadcrumbs=array(
	'M06 Empresas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Empresa', 'url'=>array('index')),
	array('label'=>'Administrar Empresa', 'url'=>array('admin')),
);
?>

<h1>Nueva Empresa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>