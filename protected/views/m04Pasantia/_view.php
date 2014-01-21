<?php
/* @var $this M04PasantiaController */
/* @var $data M04Pasantia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Planteamiento_Problema')); ?>:</b>
	<?php echo CHtml::encode($data->Planteamiento_Problema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion_Trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion_Trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Objetivo_General')); ?>:</b>
	<?php echo CHtml::encode($data->Objetivo_General); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Objetivo_Especifico')); ?>:</b>
	<?php echo CHtml::encode($data->Objetivo_Especifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Antecedentes')); ?>:</b>
	<?php echo CHtml::encode($data->Antecedentes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Metodologia')); ?>:</b>
	<?php echo CHtml::encode($data->Metodologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Productos_Desarrollo')); ?>:</b>
	<?php echo CHtml::encode($data->Productos_Desarrollo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('M06_id')); ?>:</b>
	<?php echo CHtml::encode($data->M06_id); ?>
	<br />

	*/ ?>

</div>