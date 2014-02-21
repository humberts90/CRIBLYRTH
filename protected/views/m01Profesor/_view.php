<?php
/* @var $this M01ProfesorController */
/* @var $data M01Profesor */
?>

<div class="view">

	


	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo_UNET')); ?>:</b>
	<?php echo CHtml::encode($data->Correo_UNET); ?>
	<br />
	<?php echo CHtml::link(CHtml::encode('Detalles'), array('view', 'id'=>$data->id)); ?>
	<br />
	<br />


</div>