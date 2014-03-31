<?php
/* @var $this P10AreasConomicmientoController */
/* @var $data P10AreasConomicmiento */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pertenece al departamento')); ?>:</b>
	<?php echo CHtml::encode($data->p09->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
		<br />
	<?php echo CHtml::link(CHtml::encode('Detalles'), array('view', 'id'=>$data->id)); ?>
	<br />
	<br />



</div>