<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Oferta TAP'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>

<script>

function revisar()
{
	if(document.getElementById('Modalidad_0').checked)
	{
		document.getElementById('tesis').style.display='block';
		document.getElementById('pasantias').style.display='none';
	}
	else
	{
		document.getElementById('tesis').style.display='none';
		document.getElementById('pasantias').style.display='block';

	}
}

</script>

<style>

.bloque
{
	padding-left: 50px;
	padding-bottom: 10px;
	width: 500px;
	height: auto;
	display: block;
	border-width: 0;
	border-bottom-width: 4px;
	border-style: solid;
	border-color: #CCC; 
	color: #FFF;

}

.tesis, .pasantias
{
	display: block;
	width: 550px;
	height: auto;
	background-color: #93AAD3;
}
a{
	text-decoration: none;
	color: #284181;
}

</style>

<h1>Oferta TAP</h1>

<?php

$us = isset($Usuario)==1?1:0;

$alumno = P01Rol::model()->find("nombre = 'Alumno'");

echo CHtml::radioButtonList('Modalidad','t',array('t'=>'Tesis','p'=>'Pasantías'),array('separator'=>' ','onclick'=>'revisar()'));

?>

<br></br>
<div id="tesis">
<div class="tesis">
<?php

foreach ($tesis as $t)
{
	?>
	<div class="bloque">	

	<?php

	echo '</br><b>Título: '.$t->Titulo."</b><br>Introducción: ".$t->Introduccion;
	echo CHtml::link('Detalle',array("detalle_t", "id"=>$t->id));

	echo "<br/><br/>";

	?>

	</div>


</br>
	<?php
}
?>
</div>
<?php
$this->widget('CLinkPager', array(
	'header' => '',
	'firstPageLabel' => '&lt;&lt;',
	'prevPageLabel' => '&lt;',
	'nextPageLabel' => '&gt;',
	'lastPageLabel' => '&lt;&lt;',
	'pages' => $pagesT,
));
?>

<?php

?>
</div>
<div id = "pasantias" style="display:none">
<div class="pasantias">
<?php

foreach ($pasantias as $p) 
{
	?>
	<div class="bloque">	

	<?php

	echo "</br><b>Título: ".$p->Titulo."</b><br>Descripción".$p->Descripcion_Trabajo;
	echo CHtml::link('Detalle',array("detalle_p", "id"=>$p->id));


	echo "<br/><br/>";
	


	?>

	</div>	
</div>
</br>
	<?php
}

$this->widget('CLinkPager', array(
	'header' => '',
	'firstPageLabel' => '&lt;&lt;',
	'prevPageLabel' => '&lt;',
	'nextPageLabel' => '&gt;',
	'lastPageLabel' => '&lt;&lt;',
	'pages' => $pagesP,
));
?>
