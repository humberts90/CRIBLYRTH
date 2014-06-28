

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br />

	<b><?php echo CHtml::encode('Fecha de la propuesta'); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Inscripcion); ?>
	<br />
	<b><?php echo CHtml::encode('Fecha de la defensa'); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Defensa); ?>
	<br />
	<br />
	<?php 
	$TesisyAlumno = T01TesisHasUsuario::model()->findAll("M03_id=".$data->id." AND P02_id = '1'");
	foreach ($TesisyAlumno as $value) {
	echo "<br />";
	echo CHtml::link(CHtml::encode("Descargar Planilla de evaluación de ".$value->m05->Nombre), array('actaevatesis', 'idEntrante'=>$value->M03_id.'-'.$value->M05_id )); 
		
	}

	?>
	<br />