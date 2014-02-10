<?php


echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>

<h1> Lista de tesis  </h1>

<?php 
foreach ($model as $value) {
	$tes=M03Tesis::model()->findByPk($value->M03_id);
	echo '</br>';
	echo '<h2> Titulo: '.$tes->Titulo.'</h2>';
	echo CHtml::link(CHtml::encode("Detalles"), array('tesdeta', 'id'=>$tes->id));
}

?>


