<?php
/* @var $this P07PaisController */
/* @var $model P07Pais */

$this->breadcrumbs=array(
	'P07 Paises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P07Pais', 'url'=>array('index')),
	array('label'=>'Manage P07Pais', 'url'=>array('admin')),
);
?>

<h1>Create P07Pais</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>