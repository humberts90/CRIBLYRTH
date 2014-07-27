<?php  


$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Ver Perfil',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
  
 <div class="fotoM"></div>
<div class="infoM">
<h2>Informacion de Perfil</h2>
    <br />
    <label>Nombre:</label>
	<?php echo $Usuario->Nombre," ", $Usuario->Apellido ; ?>
	<br />
	<label>Cédula:</label>
	<?php echo $Usuario->Cedula; ?>
	<br />
	<label>Teléfono:</label>
	<?php echo $Usuario->Telefono; ?>
	<br />
	<label>Dirección:</label>
	<?php echo $Usuario->Direccion; ?>
	<br />
	<label>Correo Electrónico:</label>
	<?php echo $Usuario->Correo_Electronico; ?>
	<br />
	<label>Conocimientos:</label>
		<br />
	<?php  
	 foreach ( $conoci as $valor){
				 echo $valor->p11->Nombre; 
				 ?>
				 	<br />
				 <?php
				 
	}
	?>
	<br />
	    </div>
	
		
	


	
