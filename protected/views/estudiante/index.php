<?php


$this->breadcrumbs=array(
	'Inicio',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario,"check_1"=>$check_1,"check_2"=>$check_2));



?>

<h1>Bienvenido <?php echo $Usuario->Nombre.' '.$Usuario->Apellido; ?></h1>

<p>Aqui deben ir algun tipo de notificacion</p>