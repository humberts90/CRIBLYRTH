<?php
/* @var $this T09NoticiasController */
/* @var $data T09Noticias */
?>

<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('Escrito por')); ?>:</b>
	<?php echo CHtml::encode($data->m05->Nombre.' '.$data->m05->Apellido); ?>
	<br />


	<?php echo CHtml::link(CHtml::encode('Detalles'), array('view', 'id'=>$data->id)); ?>
	<br />
	<br />


</div>