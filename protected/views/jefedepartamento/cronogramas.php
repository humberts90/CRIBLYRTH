<?php 
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Cronograma de Actividades</h1>

<?php 

foreach ($cronos as $value) {
		echo '</br><h1>';
		echo $value->nombre;
		echo '</h1></br>';
		echo $value->descripcion;
		echo '</br>';
		

		echo CHtml::link('Ver diagrama',array('crono','id'=>$value->id));
}


?>