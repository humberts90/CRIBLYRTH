<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Evaluar planes de trabajo'

);

echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>

<h1> Lista de planes de trabajo de pasantias </h1>

<div style='overflow-x:scroll'>
<table border="0" style="width: 950px;" >
	 	
	<tr>
	 <td bgcolor="#93AAD3" ><h4>Plan de Trabajo</h4></td>
	 <td bgcolor="#93AAD3"><h4>Estudiante</h4></td>
	 <td bgcolor="#93AAD3"><h4>Tutor</h4></td>
	 <td bgcolor="#93AAD3"><h4>Título de la Propuesta</h4></td>
	  <td bgcolor="#93AAD3"><h4>Fecha</h4></td>
	 
	</tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_test_2',
)); ?>

</table>
</div>
	</br>	