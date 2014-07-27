<?php
$roles=T08Usuario_has_rol::model()->findAll('M05_id='.$usu->id);

foreach ($roles as  $value) {
	if(strcmp($value->p01->nombre,"Secretaria")==0 && strcmp(Yii::app()->getController()->getId(),"secretaria")!=0){		
		echo '</br>';
		echo CHtml::link(CHtml::encode('Iniciar como: secretaria'), array('secretaria/index'),array('class'=>'btn btn-default btn-lg pull-left'));
	}
	if(strcmp($value->p01->nombre,"Profesor")==0 && strcmp(Yii::app()->getController()->getId(),"profesor")!=0){
		echo '</br>';
		echo CHtml::link(CHtml::encode("Inicio ".$value->p01->nombre), array("profesor/index"),array('class'=>'btn btn-default btn-lg pull-left'));
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
	array('label'=>'Ofertas Tesis', 'url'=>array('tesis')),
	array('label'=>'Ofertas Pasantias', 'url'=>array('Pasantias')),
	array('label'=>'Subir oferta tesis', 'url'=>array('oferta_t')),	
	array('label'=>'Subir oferta pasantias', 'url'=>array('oferta_p')),
	array('label'=>'Agregar areas de conocimiento', 'url'=>array('cono')),
);


?>
</br>
</br>
</br>
</br>