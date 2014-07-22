<tr>
	<td width="25%"><?php echo $data['Titulo']; ?></td>
	<td><?php
		$p=P03Status::model()->findByPk($data['P03']);
	echo $p->Descripcion; ?></td>

	
	<td> <b><?php echo $data['FD']; ?> </b></td>
	

</tr>