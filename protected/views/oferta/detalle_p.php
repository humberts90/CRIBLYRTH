<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Oferta TAP' , 'detalle pasantia'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>

<h1>Detalle pasantia</h1>

<?php 


$us = isset($Usuario)==1?1:0;

$alumno = P01Rol::model()->find("nombre = 'Alumno'");

	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Titulo',
		'Planteamiento_Problema',
		'Descripcion_Trabajo',
		'M06_id',
	),
)); 


echo "<br/><br/>";
	
	if($us)
	{
		$rol = T08UsuarioHasRol::model()->find("M05_id = '".$Usuario->id."'");
		if($rol->P01_id==$alumno->id)
		echo CHtml::link('Postular',array("postular_p", "id"=>$model->id));	
		else
		echo "<i>Debe ser estudiante para postularse.</i>";	
	}

	?>