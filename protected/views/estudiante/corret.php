<?php


$this->breadcrumbs=array(
	'Inicio',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario,"check_1"=>$check_1,"check_2"=>$check_2));


?>

<h1>Correcciones</h1>

<?php 
	foreach ($model_2 as $value) {
		echo '</br><p>'.$value->Descripcion.'</p></br>';
		echo $value->Fecha;
		echo '</br>';
	}

?>

