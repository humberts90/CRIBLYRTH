<?php
$roles=T08Usuario_has_rol::model()->findAll('M05_id='.$usu->id);

foreach ($roles as  $value) {
	if(strcmp($value->p01->nombre,"Secretaria")==0 && strcmp(Yii::app()->getController()->getId(),"secretaria")!=0){		
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("secretaria/index"));
	}
	if(strcmp($value->p01->nombre,"Profesor")==0 && strcmp(Yii::app()->getController()->getId(),"profesor")!=0){
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("profesor/index"));
	}
	if(strcmp($value->p01->nombre,"Jefe del Departamento")==0 && strcmp(Yii::app()->getController()->getId(),"jefedepartamento")!=0){
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("jefedepartamento/index"));
	}
	if(strcmp($value->p01->nombre,"Comisión del Tap")==0 && strcmp(Yii::app()->getController()->getId(),"comision")!=0){
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("comision/index"));
	}

	
}
$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('index')),
	array('label'=>'Modulo de actas', 'url'=>array('comision/acta')),
	array('label'=>'Modulo de noticias', 'url'=>array('comision/noti')),
	array('label'=>'Evaluar anteproyectos de Tesis', 'url'=>array('comision/tesis')),
	array('label'=>'Evaluar planes de trabajo de Pasantias', 'url'=>array('comision/pasantias')),
	array('label'=>'Listado de profesores', 'url'=>array('prof')),
	array('label'=>'Listado de tesistas', 'url'=>array('tes')),
	array('label'=>'Listado de pasantes', 'url'=>array('pas')),
	array('label'=>'Historial Tesis por Profesor', 'url'=>array('HistTesisProfesor')),
	array('label'=>'Historial Pasantias por Profesor', 'url'=>array('HistPasantiaProfesor')),
);
?>