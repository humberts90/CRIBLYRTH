<?php
/* @var $this M06EmpresaController */
/* @var $model M06Empresa */

$this->breadcrumbs=array(
	'M06 Empresas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List M06Empresa', 'url'=>array('index')),
	array('label'=>'Manage M06Empresa', 'url'=>array('admin')),
);
?>

<h1>Create M06Empresa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>