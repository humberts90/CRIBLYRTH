<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Oferta TAP' , 'detalle pasantia'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>

<h1>Detalle pasantia</h1>

<?php 

	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Titulo',
		'Planteamiento_Problema',
		'Descripcion_Trabajo',
		
	),
)); 
$empresa = M06Empresa::model()->find("id = '".$model->M06_id."'");

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$empresa,
	'attributes'=>array(
		
		'Correo',
		
	),
)); 
echo "<br/><br/>";
	


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
	

	?>