<?php
/* @var $this M03TesisController */
/* @var $data M03Tesis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Carta_Tutor')); ?>:</b>
	<?php echo CHtml::encode($data->Carta_Tutor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Introduccion')); ?>:</b>
	<?php echo CHtml::encode($data->Introduccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Planteamiento_Problema')); ?>:</b>
	<?php echo CHtml::encode($data->Planteamiento_Problema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Objetivo_General')); ?>:</b>
	<?php echo CHtml::encode($data->Objetivo_General); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Objetivo_especifico')); ?>:</b>
	<?php echo CHtml::encode($data->Objetivo_especifico); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Justificacion_Importancia')); ?>:</b>
	<?php echo CHtml::encode($data->Justificacion_Importancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Alcance_Delimitaciones')); ?>:</b>
	<?php echo CHtml::encode($data->Alcance_Delimitaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Antecedentes')); ?>:</b>
	<?php echo CHtml::encode($data->Antecedentes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bases_Teoricas')); ?>:</b>
	<?php echo CHtml::encode($data->Bases_Teoricas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bases_Legales')); ?>:</b>
	<?php echo CHtml::encode($data->Bases_Legales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Definicion_Terminos')); ?>:</b>
	<?php echo CHtml::encode($data->Definicion_Terminos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Enfoque_Investigacion')); ?>:</b>
	<?php echo CHtml::encode($data->Enfoque_Investigacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Nivel_Invesstigacion')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Nivel_Invesstigacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Diseno_Investigacion')); ?>:</b>
	<?php echo CHtml::encode($data->Diseno_Investigacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Poblacion_Muestra')); ?>:</b>
	<?php echo CHtml::encode($data->Poblacion_Muestra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tecnicas_Recoleccion_Datos')); ?>:</b>
	<?php echo CHtml::encode($data->Tecnicas_Recoleccion_Datos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Metodologias')); ?>:</b>
	<?php echo CHtml::encode($data->Metodologias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Referencias')); ?>:</b>
	<?php echo CHtml::encode($data->Referencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Inscripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Inscripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Aprobación')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Aprobación); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Defensa')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Defensa); ?>
	<br />

	*/ ?>

</div>