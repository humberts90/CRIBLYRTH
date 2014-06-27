
<?php


echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>

<h1> Lista de Pasantias  </h1>

<?php 
foreach ($model as $value) {
	$tes=M04Pasantia::model()->findByPk($value->M04_id);
	echo '</br>';
	echo '<h2> Titulo: '.$tes->Titulo.'</h2>';
	echo CHtml::link(CHtml::encode("Detalles"), array('pasdeta', 'id'=>$tes->id));
	echo '</br>';
}
	$this->widget('CLinkPager', array(
		'header' => '',
		'firstPageLabel' => '&lt;&lt;',
		'prevPageLabel' => '&lt;',
		'nextPageLabel' => '&gt;',
		'lastPageLabel' => '&lt;&lt;',
		'pages' => $pages,
	));

?>
