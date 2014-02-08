	<?php 
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$data->id);
		foreach ($has1 as  $value) {
			$val=M05Usuario::model()->findByPk($value->M05_id); 
			$actor=P02TipoRelacion::model()->findByPk($value->P02_id);
			?>

			<b><?php echo CHtml::encode($actor->Descripcion); ?>:</b>
			<?php echo CHtml::encode($val->Nombre." ".$val->Apellido); ?>
			<br />


	<?php	}	?>
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br />

	<b><?php echo CHtml::encode('Fecha de la propuesta'); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Inscripcion); ?>
	<br />
	<br />
	<?php echo CHtml::link(CHtml::encode("Ver detalles"), array('pasdeta', 'id'=>$data->id)); ?>
	<br />