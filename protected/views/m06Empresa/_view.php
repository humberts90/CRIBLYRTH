<?php
/* @var $this M06EmpresaController */
/* @var $data M06Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RIF')); ?>:</b>
	<?php echo CHtml::encode($data->RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Razon_Social')); ?>:</b>
	<?php echo CHtml::encode($data->Razon_Social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono_1')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono_2')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono_2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Fax')); ?>:</b>
	<?php echo CHtml::encode($data->Fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sitio_Web')); ?>:</b>
	<?php echo CHtml::encode($data->Sitio_Web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P04_id')); ?>:</b>
	<?php echo CHtml::encode($data->P04_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P08_id')); ?>:</b>
	<?php echo CHtml::encode($data->P08_id); ?>
	<br />

	*/ ?>

</div>