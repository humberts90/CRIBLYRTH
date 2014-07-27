
<div class="view">

	<tr>
		<td width="300px"><?php echo CHtml::encode($data->Titulo); ?></td>
		<td width="100px"><?php echo CHtml::encode($data->Fecha_Inscripcion); ?></td>
		<td  width="110px"><?php echo CHtml::encode($data->Fecha_Aprobación); ?></td>
		<td  width="110px"><?php echo CHtml::encode($data->Fecha_Defensa); ?></td>
		<td  width="100px"><?php echo CHtml::link(CHtml::encode("Ver detalles"), array('comision/tesdeta', 'id'=>$data->id)); ?></td>
		

	</tr>
	
</div>