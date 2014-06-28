<?php


$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Ver Jurados',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario,"check_1"=>$check_1,"check_2"=>$check_2));


?>

<h1>Jurados</h1>



<br />

			<?php 		
			foreach ($has1 as  $value) {

				if($value->P02_id>3){

			$val=M05Usuario::model()->findByPk($value->M05_id); 
			$actor=P02TipoRelacion::model()->findByPk($value->P02_id);
			?>

			<b><?php echo CHtml::encode($actor->Descripcion." Profesor "); ?>:</b>
			<?php echo CHtml::encode($val->Nombre." ".$val->Apellido); ?>
			<br />



			<?php }} ?>