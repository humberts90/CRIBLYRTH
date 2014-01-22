<?php
/* @var $this M05UsuarioController */
/* @var $data M05Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave')); ?>:</b>
	<?php echo CHtml::encode($data->Clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo_Electronico')); ?>:</b>
	<?php echo CHtml::encode($data->Correo_Electronico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unidades_Credito_Aprobadas')); ?>:</b>
	<?php echo CHtml::encode($data->Unidades_Credito_Aprobadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Servicio_Comunitario')); ?>:</b>
	<?php echo CHtml::encode($data->Servicio_Comunitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ultimo_Lapso_Academico')); ?>:</b>
	<?php echo CHtml::encode($data->Ultimo_Lapso_Academico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session')); ?>:</b>
	<?php echo CHtml::encode($data->session); ?>
	<br />

	*/ ?>

</div>