<?php $auto=T01TesisHasUsuario::model()->findAll("M03_id= ".$data['ID']." AND P02_id = 1");?>

<tr>
	<td width="25%"><?php echo $data['Titulo']; ?></td>
	<td>
	<table border="0">
	<tr>

	<?php
	foreach ($auto as $ht ) { ?>
	<td>
	<?php echo $ht->m05->Nombre." ".$ht->m05->Apellido; ?>
	</td>
	<?php } ?>
	</tr>
	</table>
	</td>
	<td><?php
		$p=P03Status::model()->findByPk($data['P03']);
	echo $p->Descripcion; ?></td>
	<td>
	<table border="0">
	
	<tr>
	<td><b>  Fecha Defensa: </b> </td>
	<td> <b><?php echo $data['FD']; ?> </b></td>
	</tr>
	<tr>
	<td>Fecha inscripcion: </td>
	<td><?php echo $data['FI']; ?></td>
	</tr>
	<tr>
	<td>Fecha Aprobacion: </td>
	<td><?php echo $data['FA']; ?></td>
	</tr>
	</table>
	</td>
	<td> <?php echo CHtml::link(CHtml::encode("Detalles"), array('tesdeta', 'id'=>$data['ID'])); ?></td>

</tr>