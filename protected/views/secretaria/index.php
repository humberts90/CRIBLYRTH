<?php
$this->breadcrumbs=array(
	'Inicio',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Bienvenida <?php echo $Usuario->Nombre.' '.$Usuario->Apellido;?> </h1>
<p>
	aqui va una breve reseña del sistema desde el punto de vista de la Secretaria </br>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin adipiscing suscipit lacus vitae posuere.
 Proin elit enim, blandit vitae ipsum et, dictum sodales sem. Vestibulum est arcu, auctor vel hendrerit sed, 
 aliquam nec quam. Ut nisl velit, sodales vel quam quis, imperdiet dapibus sem. Phasellus convallis felis quis 
 odio congue, ac consectetur felis semper. Nam tristique nunc tellus, sit amet convallis justo venenatis in. 
 Integer magna est, rhoncus cursus neque eu, condimentum elementum velit. Vivamus consequat dignissim lorem. 
 Quisque feugiat tellus eget urna bibendum hendrerit. Sed eu nisi nec velit varius laoreet. Nam nec metus sit 
 amet quam cursus iaculis. Fusce sagittis orci commodo neque suscipit, sit amet commodo augue pellentesque. 
 Etiam eget tincidunt ligula. Nullam mi sem, aliquam sed cursus eget, interdum in ligula. Curabitur viverra 
 ultrices consequat. Vestibulum arcu eros, faucibus sit amet ante eu, mollis tincidunt orci.
</p>