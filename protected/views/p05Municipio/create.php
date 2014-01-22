<?php
/* @var $this P05MunicipioController */
/* @var $model P05Municipio */

$this->breadcrumbs=array(
	'P05 Municipios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P05Municipio', 'url'=>array('index')),
	array('label'=>'Manage P05Municipio', 'url'=>array('admin')),
);
?>

<h1>Create P05Municipio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>