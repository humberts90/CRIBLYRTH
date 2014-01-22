<?php
/* @var $this T11ActividadController */
/* @var $data T11Actividad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('M04_Pasantia_id')); ?>:</b>
	<?php echo CHtml::encode($data->M04_Pasantia_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Fin')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Fin); ?>
	<br />


</div>