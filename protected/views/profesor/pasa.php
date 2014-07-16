<?php $auto=T02PasantiaHasUsuario::model()->findAll("M04_id= ".$data['ID']." AND P02_id = 7");?>

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
		$p=M07TutorExterno::model()->findByPk($data['M07']);
	echo $p->Nombre." ".$p->Apellido; ?></td>
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