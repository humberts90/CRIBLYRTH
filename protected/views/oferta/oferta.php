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

echo CHtml::radioButtonList('Modalidad','t',array('t'=>'Tesis','p'=>'Pasantías'),array('separator'=>' ','onclick'=>'revisar()'));

?>

<br></br>
<div id="tesis">
<div class="tesis">
<?php
$varT = 1;
	if(isset($_GET['nPagT'])){
		$k = $_GET['nPagT'];
	}
	else {
		$k=0;
	}
	if((($k+1)*5)>sizeof($tesis)){
		$lim1 = sizeof($tesis);
	}else{
		$lim1 = (($k+1)*5); 
	}

for ($i=($k<=0?($k*5):(($k*5-1)));$i<(sizeof($tesis)<$lim1?sizeof($tesis):$lim1);$i++) 
{
	?>
	<div class="bloque">	

	<?php

	echo '</br><b>Título: '.$tesis[$i]->Titulo."</b><br>Introducción: ".$tesis[$i]->Introduccion;
	echo CHtml::link('Detalle',array("detalle_t", "id"=>$tesis[$i]->id));

	?>

	</div>

	<?php
}
?>
</div>

</br>
</br>
<?php
$var2 = 0;
	for ($i = 0*($k*5); $i<(sizeof($tesis)>5?sizeof($tesis):0); $i++)
	{
		if($i == 0 && sizeof($tesis)>5){
			
			echo '<a href="Listar?nPagT='.($k>0?($k-1):0).'"> << Anterior </a>';
			echo '<a>  </a>';
			echo '<a href="Listar?nPagT='.($var2).'">'.($var2+1).'</a>';
			$var2 = $var2 + 1;
		}

		if($i == (4 * $varT)){
			
				echo '<a> - </a>';
				echo '<a href="Listar?nPagT='.($var2).'">'.($var2+1).'</a>';	
			$varT = $varT + 1;
			$var2 = $var2 + 1;
		}

	}
	
	if(sizeof($tesis)>5){
	echo '<a> </a>';
		
	echo '<a href="Listar?nPagT='.($k<($var2-1)?$k+1:($var2-1)).'"> Siguiente >> </a>';
	}

$_GET['nPagT'] = null;
?>
</div>
<div id = "pasantias" style="display:none">
<div class="pasantias">
<?php
$varP = 1;
	if(isset($_GET['nPagP'])){
		$k2 = $_GET['nPagP'];
	}
	else {
		$k2=0;
	}
	if((($k2+1)*5)>sizeof($pasantias)){
		$lim2 = sizeof($pasantias);
	}else{
		$lim2 = (($k2+1)*5); 
	}

for ($i = ($k<=0?($k*5):(($k*5-1))); $i < (sizeof($pasantias)<$lim2?sizeof($pasantias):$lim2); $i++) 
{
	?>
	<div class="bloque">	

	<?php

	echo "</br><b>Título: ".$pasantias[$i]->Titulo."</b><br>Descripción".$pasantias[$i]->Descripcion_Trabajo;
	echo CHtml::link('Detalle',array("detalle_p", "id"=>$pasantias[$i]->id));

	?>

	</div>	

	<?php
}
?>
</div>
</br>
</br>
<?php
$var3 = 0;
	for ($i = 0*($k2*5); $i< (sizeof($pasantias)>5?sizeof($pasantias):0); $i++)
	{
		if($i == 0 && sizeof($pasantias)>5){
			echo '<a href="Listar?nPagT='.($k2>0?($k2-1):0).'"> << Anterior </a>';
			echo '<a>  </a>';
			echo '<a href="Listar?nPagP='.($var3).'">'.($var3+1).'</a>';
			$var3 = $var3 + 1;
		}

		if($i == (4 * $varP)){
				echo '<a> - </a>';
				echo '<a href="Listar?nPagP='.($var3).'">'.($var3+1).'</a>';	
			$varP = $varP + 1;
			$var3 = $var3 + 1;
		}


	}
	if(sizeof($pasantias)>5){
	echo '<a> </a>';
	echo '<a href="Listar?nPagT='.($k2<($var3-1)?$k2+1:($var3-1)).'"> Siguiente >> </a>';
	}
$_GET['nPagP'] = null;

?>
</div>