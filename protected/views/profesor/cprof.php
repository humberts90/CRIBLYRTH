<?php
$this->breadcrumbs=array(
	'Inicio',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>

<h1>Areas de Conocimiento</h1>

<?php $this->renderPartial('_prof', array('model'=>$model)); ?>