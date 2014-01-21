<?php
/* @var $this T10ConocimientosController */
/* @var $data T10Conocimientos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('M04_Pasantia_id')); ?>:</b>
	<?php echo CHtml::encode($data->M04_Pasantia_id); ?>
	<br />


</div>