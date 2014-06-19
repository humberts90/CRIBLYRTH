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
		$this->widget('zii.widgets.CListView', array(
		    'dataProvider'=>$tesis,
		    'itemView'=>'_view',   // refers to the partial view named '_post'
		/*    'sortableAttributes'=>array(
		        'Titulo',
		    ),*/
		));
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
	</div>

<div id = "pasantias" style="display:none">
<div class="pasantias">
<?php

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$pasantias,
    'itemView'=>'_viewp',   // refers to the partial view named '_post'
/*    'sortableAttributes'=>array(
        'Titulo',
    ),*/
));?>
</div><?php
$this->widget('CLinkPager', array(
	'header' => '',
	'firstPageLabel' => '&lt;&lt;',
	'prevPageLabel' => '&lt;',
	'nextPageLabel' => '&gt;',
	'lastPageLabel' => '&lt;&lt;',
	'pages' => $pagesP,
));
?>
</div>