
<div class="view">

	<tr>
		<td width="300px"><?php echo CHtml::encode($data->Titulo); ?></td>
		<td width="100px"><?php echo CHtml::encode($data->Fecha_Inscripcion); ?></td>
		<td  width="100px"><?php echo CHtml::encode($data->Fecha_Aprobacion); ?></td>
		<td  width="100px"><?php echo CHtml::encode($data->Fecha_Defensa); ?></td>
		<td  width="80px"><?php echo CHtml::link(CHtml::encode("Ver detalles"), array('comision/pasdeta', 'id'=>$data->id)); ?></td>
		

	</tr>
	
</div>