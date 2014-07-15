<?php $auto=T01TesisHasUsuario::model()->findAll("M03_id= ".$data->M03_id." AND P02_id = 1");?>

<tr> 
	<td width="25%"><?php echo $data->m03->Titulo; ?></td>
	<td>
		<table  border="0"> 
		       <tr>

		<?php 
		foreach ($auto as $ht ) { ?> 
			<td>
			 <?php echo $ht->m05->Nombre." ".$ht->m05->Apellido;  ?>  
			 </td>      
        <?php } ?>
       		 </tr>
        </table>  
     </td>
	<td><?php echo $data->m03->p03->Descripcion; ?></td>
	<td>
			<table border="0"> 
		      		 <tr> 
			            <td>Fecha inscripcion: </td> 
			            <td><?php echo $data->m03->Fecha_Inscripcion; ?></td> 
		            </tr>
		            <tr>
		             <td>Fecha Aprobacion: </td> 
		            <td><?php echo $data->m03->Fecha_Aprobación; ?></td> 
		            </tr>
		            <tr>
		             <td>Fecha Defensa: </td> 
		            <td><?php echo $data->m03->Fecha_Defensa; ?></td> 
		            </tr>
		        		      
	        </table> 
    </td>
	<td> <?php echo CHtml::link(CHtml::encode("Detalles"), array('tesdeta', 'id'=>$data->M03_id)); ?></td>

</tr>