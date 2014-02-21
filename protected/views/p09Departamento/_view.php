<?php
/* @var $this P09DepartamentoController */
/* @var $data P09Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />
	<?php echo CHtml::link(CHtml::encode('Detalles'), array('view', 'id'=>$data->id)); ?>
	<br />
	<br />


</div>