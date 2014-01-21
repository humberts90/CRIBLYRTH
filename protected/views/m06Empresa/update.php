<?php
/* @var $this M06EmpresaController */
/* @var $model M06Empresa */

$this->breadcrumbs=array(
	'M06 Empresas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List M06Empresa', 'url'=>array('index')),
	array('label'=>'Create M06Empresa', 'url'=>array('create')),
	array('label'=>'View M06Empresa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage M06Empresa', 'url'=>array('admin')),
);
?>

<h1>Update M06Empresa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>