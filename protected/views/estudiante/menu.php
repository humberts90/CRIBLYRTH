<?php

if($check_1==null&&$check_2==null){
	$this->menu=array(
	//array('label'=>'Subir proyecto', 'url'=>array('escoger')),
        array('label'=>'Cargar Tesis', 'url'=>array('subirt')),
            array('label'=>'Subir Pasantía', 'url'=>array('subirp')),
	array('label'=>'Pasos para empezar con la Tesis', 'url'=>array('escoger')),
	array('label'=>'Pasos para empezar con la Pasantia', 'url'=>array('TutorialP')),
	);
}else{
	if($check_2!=null){
		$ex=urlencode(base64_encode($check_2->id));
		
		$this->menu=array(
		array('label'=>'Ver Tesis', 'url'=>array('vertesis')),	
		array('label'=>'Ver Jurados', 'url'=>array('jurat')),	
		array('label'=>'Ver Correcciones', 'url'=>array('corret')),	
		);
	}
	if($check_1!=null){
	$tf=M02Cronograma::model()->find("m04_pasantia_id=".$check_1->M04_id);
	
		$ex=base64_decode(urldecode ($check_1->id));
		 if(count($tf)>0){
		 $this->menu=array(
		array('label'=>'Ver Pasantias', 'url'=>array('verpasantias')),	
		array('label'=>'Ver Jurados', 'url'=>array('jurap')),	
		array('label'=>'Ver Coreecciones', 'url'=>array('correp')),	
		
	
		);
		 
		 }
		 else{
		  $this->menu=array(
		array('label'=>'Ver Pasantias', 'url'=>array('verpasantias')),	
		array('label'=>'Ver Jurados', 'url'=>array('jurap')),	
		array('label'=>'Ver Correcciones', 'url'=>array('correp')),	
		array('label'=>'Agregar Cronograma de Actividades', 'url'=>array('crono')),	
	
		);
		 }
		
	}	
}

?>