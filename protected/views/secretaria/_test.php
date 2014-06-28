
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br />

	<b><?php echo CHtml::encode('Fecha de la propuesta'); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Inscripcion); ?>
	<br />
	<br />
	<?php echo CHtml::link(CHtml::encode("Ver detalles"), array('actaeva', 'id'=>$data->id)); ?>
	<br />