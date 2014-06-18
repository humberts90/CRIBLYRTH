
<?php
$this->breadcrumbs=array(
	'Inicio',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>

<h1> Lista  de tesis </h1>


<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_test',
)); 

?>