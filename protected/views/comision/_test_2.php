	

	<tr>
		<td ><div style="text-align: center;"><?php echo CHtml::link(CHtml::encode("Ver detalles"), array('pasdeta', 'id'=>$data->id)); ?></div></td>

	<?php 
		
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$data->id);
		foreach ($has1 as  $value) {
			$val=M05Usuario::model()->findByPk($value->M05_id); 
				if ($value->P02_id==7 || $value->P02_id==2) {?>					
					<td><?php echo CHtml::encode($val->Nombre." ".$val->Apellido); ?></td>
						
	<?php		}
		}	?>
	


	<td ><?php echo CHtml::encode($data->Titulo); ?></td>
	<td ><?php echo CHtml::encode($data->Fecha_Inscripcion); ?></td>	
	
	</tr>
