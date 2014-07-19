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
	
	echo CHtml::link(CHtml::encode("Descargar Planilla de evaluación"), array('evapasantia', 'id'=>$data->id)); 
	?>
	<br />