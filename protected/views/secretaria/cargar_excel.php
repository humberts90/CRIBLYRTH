<?php
$this->breadcrumbs=array(
	'Inicio',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Bienvenida <?php echo $Usuario->Nombre.' '.$Usuario->Apellido;?> </h1>

<h2>Importar Tesis</h2>

<div align="center">
	<?php echo CHtml::beginForm('','post', $htmlOptions = array('enctype' => 'multipart/form-data', )); ?>
	<?php echo CHtml::fileField('file',false); ?>
	<br/>
	<br/>
	<?php echo CHtml::submitButton('Cargar',false); ?>
	<br/>
	<?php echo CHtml::endForm(); ?>	
<div>
	<?php if(strcasecmp("", $error)!=0) {?>
	<ul>
	 <li>
	<?php echo CHtml::label($error,true,
	  $htmlOptions = array('class' => CHtml::$errorMessageCss))?>
	 </li>
	<ul> 
	<?php } ?>		
