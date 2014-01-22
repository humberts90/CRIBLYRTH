<?php
/* @var $this M05UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inicio',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>

<h1>Bienvenido <?php echo $Usuario->Nombre.' '.$Usuario->Apellido; ?></h1>

