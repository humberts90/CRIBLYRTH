<?php


$this->breadcrumbs=array(
	'Inicio',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario,"check_1"=>$check_1,"check_2"=>$check_2));



?>
<h1> Tutorial de pasos a seguir al seleccionar pasantias </h1>
<?php $Tpasantias = CHtml::image(Yii::app()->request->baseUrl.'/themes/style/Tpasantias.jpg','Tutorial de pasantias');?>
<h2 style="display:block;float:left;margin-left:-5px; "> <?php echo CHtml::link($Tpasantias); ?></h2></h2>

