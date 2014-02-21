<?php
/* @var $this P01RolController */
/* @var $data P01Rol */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />
		<br />
	<?php echo CHtml::link(CHtml::encode('Detalles'), array('view', 'id'=>$data->id)); ?>
	<br />
	<br />


</div>