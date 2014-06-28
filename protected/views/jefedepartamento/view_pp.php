
<?php
 $tesista=M05Usuario::model()->findByPk($data->M05_id);
 $ts=M04Pasantia::model()->findByPk($data->M04_id);
 $tutor=T02PasantiaHasUsuario::model()->findAll("M04_id =".$ts->id);
?>



<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::encode($tesista->Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($tesista->Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($tesista->Nombre); ?>
	<br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($tesista->Telefono); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo_Electronico')); ?>:</b>
	<?php echo CHtml::encode($tesista->Correo_Electronico); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($ts->Titulo)." ".CHtml::link(CHtml::encode("Ver detalles"), array('comision/pasdeta', 'id'=>$ts->id));; ?>
	<br />



	<?php foreach ($tutor as $value) { 
		if($value->P02_id!=1){

		?>
		

	<b><?php echo CHtml::encode($value->p02->Descripcion); ?>:</b>
	<?php echo CHtml::encode($value->m05->Nombre." ".$value->m05->Apellido); ?>
	<br />

	<?php }}?>


	


	


 
     
       
	   
	   
     
  