<?php
/* @var $this P11ConocimientosController */
/* @var $data P11Conocimientos */
?>

<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Area de Conocimiento')); ?>:</b>
	<?php echo CHtml::encode($data->p10->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
		<br />
	<?php echo CHtml::link(CHtml::encode('Detalles'), array('view', 'id'=>$data->id)); ?>
	<br />
	<br />


</div>