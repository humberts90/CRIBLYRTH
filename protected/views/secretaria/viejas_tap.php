<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Escoger modalidad',
);
?>

<h1>Escoja la modalidad que desea trabajar </h1>

<form name="input" action="viejas_tap" method="post">
<input type="radio" name="tip" value="1" checked="checked">Tesis<br>
<input type="radio" name="tip" value="2">Pasantias<br>
<input type="submit" name="desi" value="Siguiente" />
</form> 