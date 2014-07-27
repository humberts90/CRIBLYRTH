<?php
/* @var $this M01ProfesorController */
/* @var $data M01Profesor */
?>
<tr>
	<td ><?php echo CHtml::encode($data->Cedula); ?></td>
	<td><?php echo CHtml::encode($data->Nombre." ".$data->Apellido); ?></td>
	<td ><?php echo CHtml::encode($data->Correo_UNET); ?></td>


	<td><?php echo CHtml::link(CHtml::encode('Detalles'), array('detalle', 'id'=>$data->id)); ?> </td>


	



</tr>



	


	



