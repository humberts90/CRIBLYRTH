<?php
/* @var $this M01ProfesorController */
/* @var $data M01Profesor */
?>
<tr>
	<td ><?php echo CHtml::encode($data->Cedula); ?></td>
	<td><?php echo CHtml::encode($data->Nombre." ".$data->Apellido); ?></td>
	<td ><?php echo CHtml::encode($data->Correo_UNET); ?></td>
<<<<<<< HEAD
=======
	<td><?php echo CHtml::link(CHtml::encode('Detalles'), array('detalle', 'id'=>$data->id)); ?> </td>

>>>>>>> c90be74f54013dc9ce537cb7e087ccfebc1cb019
</tr>



	


	



