<?php
$this->breadcrumbs=array(
	'Inicio',
);

?>
<h1>Bienvenido </h1>
<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<div style="display:block; float:left;margin:0 auto;">
	

<?php $tesis = CHtml::image(Yii::app()->request->baseUrl.'/themes/style/tesis.jpg','Tesis');?>
<h2 style="display:block;float:left;margin-left:165px; "> <?php echo CHtml::link($tesis, array("oferta/Tesis")); ?></h2>
<?php $pasantias = CHtml::image(Yii::app()->request->baseUrl.'/themes/style/pasantias.jpg','Pasantias');?>
<h2 style="display:block;float:left;margin-left:25px; "> <?php echo CHtml::link($pasantias, array("oferta/Pasantias")); ?></h2>

</div>