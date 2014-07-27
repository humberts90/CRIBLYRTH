
<?php
 $tesista=M05Usuario::model()->findByPk($data->M05_id);
 $ts=M04Pasantia::model()->findByPk($data->M04_id);
 $tutor=T02PasantiaHasUsuario::model()->findAll("M04_id =".$ts->id);
?>
<div class="view">

	<tr>
		<td width="120px"><?php echo CHtml::encode($tesista->Cedula); ?></td>
		<td width="200px"><?php echo CHtml::encode($tesista->Nombre." ".$tesista->Apellido); ?></td>
		<td width="120px"><?php echo CHtml::encode($tesista->Telefono); ?></td>
		<td width="250px" ><?php echo CHtml::encode($tesista->Correo_Electronico); ?></td>
		<td width="120px"><?php echo CHtml::link(CHtml::encode("Ver detalles"), array('comision/pasdeta', 'id'=>$ts->id)); ?></td>

	</tr>
	
</div>


	


	


 
     
       
	   
	   
     
  