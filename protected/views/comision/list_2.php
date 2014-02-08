<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Evaluar planes de trabajo'

);

echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>

<h1> Lista de planes de trabajo de pasantias </h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_test_2',
)); ?>