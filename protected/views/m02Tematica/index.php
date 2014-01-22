<?php
/* @var $this M02TematicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M02 Tematicas',
);

$this->menu=array(
	array('label'=>'Create M02Tematica', 'url'=>array('create')),
	array('label'=>'Manage M02Tematica', 'url'=>array('admin')),
);
?>

<h1>M02 Tematicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
