<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Modulo de actas'=> array('acta'),
	'Editar Acta',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>

<h1>Editar Acta <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form_ac', array('model'=>$model)); ?>