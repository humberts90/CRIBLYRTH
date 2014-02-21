<?php
/* @var $this M06EmpresaController */
/* @var $model M06Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Empresas', 'url'=>array('index')),
	array('label'=>'Nueva Empresa', 'url'=>array('create')),
	array('label'=>'Detalles de  la Empresa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Empresa <?php echo $model->Razon_Social; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>