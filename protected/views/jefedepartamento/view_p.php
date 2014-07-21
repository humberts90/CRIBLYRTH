<?php
/* @var $this M01ProfesorController */
/* @var $data M01Profesor */
?>
<tr>
	<td width="25%"><?php echo CHtml::encode($data->Cedula); ?></td>
	<td><?php echo CHtml::encode($data->Nombre." ".$data->Apellido); ?></td>
	<td ><?php echo CHtml::encode($data->Correo_UNET); ?></td>
<<<<<<< HEAD
	<td><?php echo CHtml::link(CHtml::encode('Detalles'), array('detalle', 'id'=>$data->id)); ?> </td>
=======
>>>>>>> b350c701d804d2a8b0f8a3d4cb4ee4a4a999d4cf
</tr>



	


	



