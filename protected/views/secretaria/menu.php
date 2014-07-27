<?php

$roles=T08Usuario_has_rol::model()->findAll('M05_id='.$usu->id);

foreach ($roles as  $value) {
	if(strcmp($value->p01->nombre,"Secretaria")==0 && strcmp(Yii::app()->getController()->getId(),"secretaria")!=0){		
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("secretaria/index"),array('class'=>'btn btn-default btn-lg pull-left'));
	}
	if(strcmp($value->p01->nombre,"Profesor")==0 && strcmp(Yii::app()->getController()->getId(),"profesor")!=0){
		echo '</br>';
		echo CHtml::link(CHtml::encode("Iniciar como:".$value->p01->nombre), array("profesor/index"),array('class'=>'btn btn-default btn-lg pull-left'));
	}
	if(strcmp($value->p01->nombre,"Jefe del Departamento")==0 && strcmp(Yii::app()->getController()->getId(),"jefe")!=0){
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("jefe/index"),array('class'=>'btn btn-default btn-lg pull-left'));
	}
	if(strcmp($value->p01->nombre,"Comisión del Tap")==0 && strcmp(Yii::app()->getController()->getId(),"jefe")!=0){
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("comision/index"),array('class'=>'btn btn-default btn-lg pull-left'));
	}

	
}

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('index')),
	//array('label'=>'Buscar Constancias', 'url'=>array('constancias')),
	array('label'=>'Buscar Acta de Evaluación Tesis', 'url'=>array('evaluatesis')),
	array('label'=>'Buscar Acta de Evaluación Pasantía', 'url'=>array('evaluapasantia')),	
	array('label'=>'Registrar TAP culminado', 'url'=>array('viejas_tap')),
	array('label'=>'Elaborar Acta', 'url'=>array('elaborar_acta')),
	array('label'=>'Enviar Correo', 'url'=>array('correo')),
	array('label'=>'Importar Tesis', 'url'=>array('cargar')),
);
?>
</br>
</br>
