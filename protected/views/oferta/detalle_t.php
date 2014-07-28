<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Oferta TAP' , 'detalle tesis'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>

<h1>Detalle tesis</h1>

<?php

$us = Yii::app()->user->isGuest;



 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Titulo',
		'Introduccion',
		'Planteamiento_Problema'
	),
)); 
 if($conocimiento)
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$conocimiento,
	'attributes'=>array(
		
		'Nombre',
	),
)); 


echo "<br/><br/>";
	
	if(!$us)
	{

		if(Yii::app()->authManager->checkAccess('Alumno',Yii::app()->user->id))

		{
			?>

<h1>Detalle Tutor</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$tutor,
	'attributes'=>array(
		'Apellido',
		'Nombre',
		'Correo_Electronico',	

	),
)); 
		}
		else
		echo "<i>Debe ser estudiante para ver información del tutor.</i>";	
	}

?>