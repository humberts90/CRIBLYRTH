<?php
$this->breadcrumbs=array(
	'Inicio',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Bienvenido Prof <?php echo $Usuario->Nombre.' '.$Usuario->Apellido;?> </h1>
<p>

<h3><b>Tesis</b></h3>


<table border="0" style="width: 100%" >
  <tr>
    <td bgcolor="#93AAD3"><h4>Titulo</h4></td>
    <td bgcolor="#93AAD3"><h4>Autor</h4></td>
    <td bgcolor="#93AAD3"><h4>Status</h4></td>
    <td bgcolor="#93AAD3"><h4>Fechas</h4></td>
    <td bgcolor="#93AAD3"><h4>Detalles</h4></td>
  </tr>
    <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'tesi',
    )); ?>
</table>
</br>
</br>

<h3><b>Pasantias</b></h3>

<table border="0" style="width: 100%">
<tr>
  	 <td bgcolor="#93AAD3"><h4>Titulo</h4></td>
	  <td bgcolor="#93AAD3"><h4>Pasante</h4></td> 
	  <td bgcolor="#93AAD3"><h4>Tutor Externo</h4></td>
	  <td bgcolor="#93AAD3"><h4>Fecha Defensa</h4></td>
	  <td bgcolor="#93AAD3"><h4>Detalles</h4></td>
</tr>

  <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider2,
    'itemView'=>'pasa',
    )); ?>
</table>


</p>