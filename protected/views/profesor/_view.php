<?php
/* @var $this P01RolController */
/* @var $data P01Rol


	$tes=M03Tesis::model()->findByPk($value->M03_id);
	echo '</br>';
	echo '<h2> Titulo: '.$tes->Titulo.'</h2>';
	echo CHtml::link(CHtml::encode("Detalles"), array('tesdeta', 'id'=>$tes->id));

 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode(($data->M03_id)); ?>
	<br /></br>

	<?php echo CHtml::link(CHtml::encode('Detalles'), array('tesdeta', 'id'=>$data->M03_id)); ?>
	<br />
	<br />


</div>