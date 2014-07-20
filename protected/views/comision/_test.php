
	<tr>
		<td ><div style="text-align: center;"><?php echo CHtml::link(CHtml::encode("Ver detalles"), array('tesdeta', 'id'=>$data->id)); ?></div></td>

	<?php 
		$has1=T01TesisHasUsuario::model()->findAll('M03_id = '.$data->id);
		foreach ($has1 as  $value) {
			$val=M05Usuario::model()->findByPk($value->M05_id); 
				if ($value->P02_id==1 || $value->P02_id==2) {?>					
					
				<td><?php echo CHtml::encode($val->Nombre." ".$val->Apellido); ?></td><br />
						

	<?php		}
		}	?>
	<td ><?php echo CHtml::encode($data->Titulo); ?></td>
	<td ><?php echo CHtml::encode($data->Fecha_Inscripcion); ?></td>	
	
	</tr>
	


