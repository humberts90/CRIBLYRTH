<?php
/* @var $this P01RolController */
/* @var $data P01Rol

 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br /></br>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Introduccion')); ?>:</b>
	<?php echo CHtml::encode($data->Introduccion); ?>
	<br />
		<br />
	<?php echo CHtml::link(CHtml::encode('Detalles'), array('detalle_t', 'id'=>$data->id)); ?>
	<br />
	<br />


</div>