<?php

class EstudianteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.hakghkfgkfvgskgksgfksgk
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			   array('allow',  
						'roles'=>array('Administrador'),
						'users'=>array('@'),
				),	
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'roles'=>array('Alumno'),
					'users'=>array('@'),
				),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		
		);
	}

	//-----------------------------Index para los dos casos ---------------------------------------------------------
	public function actionIndex()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
                $model_6=new M05Usuario;
                //si tiene tesis cargando, automáticamente redirecciona
                if($check_2!=NULL&&$check_2->P02_id==1){
                    $model_1=M03Tesis::model()->find("id= ".$check_2->M03_id);
		$model_2=new T01TesisHasUsuario;
		$model_3=$check_2;
		$model_4=$tar;
		
		$model_5=new T04ConocimientoTesis;
                
                $sql = "Select M05_id from t01_tesis_has_usuario where M03_id = ".$model_1->id." and not M05_id = ".$tar->id;
                $comando = Yii::app()->db->createCommand($sql);
                $value=$comando->queryAll();
               // echo print_r($value);
                 if(count($value)>0)
                  $model_6=  M05Usuario::model()->find("id= ".$value[0]['M05_id']);
                
                   $this->redirect('subirt',array('Usuario'=>$tar,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,'model_5'=>$model_5,'model_6'=>$model_6));
                 //$this->render('index',array('Usuario'=>$tar,"check_1"=>$check_1,"check_2"=>$check_2));
                }else
		   $this->render('index',array('Usuario'=>$tar,"check_1"=>$check_1,"check_2"=>$check_2));
                
	}



	//------------------------------Para que escoja que quiere hacer Tesis o Pasantias---------------------------------

	public function ActionEscoger(){
		
		if(isset($_POST['desi'])){
			if($_POST["tip"]==1){
				$this->redirect(array('subirt'));
			}
			else{
				$this->redirect(array('subirp'));
			}
		}
		$this->render('des');
	}
	//------------------------------Para que escoja que quiere hacer Tesis o Pasantias---------------------------------

	public function ActionTutorialP(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);		
		$this->render('tutorial_pasantias',array(
		"check_1"=>$check_1,
		"check_2"=>$check_2,
        'Usuario'=>$tar,
		));

	}


	public function ActionTutorialT(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);		
		$this->render('tutorial_tesis',array(
		"check_1"=>$check_1,
		"check_2"=>$check_2,
        'Usuario'=>$tar,
		));

	}
	//-----------------------------TESIS-------------------------------------------------------------------------------	

	// para que estudiante vea como va quedando su tesis y imprimir constancias o la misma teis
	public function actionVertesis()
	{		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
		$model=M03Tesis::model()->findByPk($check_2->M03_id);
		$has1=T01TesisHasUsuario::model()->findAll('M03_id = '.$model->id);
		$status=P03Status::model()->findByPk($model->P03_id);
		$this->render('vertes',array(
			'Usuario'=>$tar,
			"check_1"=>$check_1,
			"check_2"=>$check_2,
			'model'=>$model,
			'has1'=>$has1,
			'Sta'=>$status,
			));
	}
	// para ver los jurados de la tesis
	public function actionJurat()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
		$model=M03Tesis::model()->findByPk($check_2->M03_id);
		$has1=T01TesisHasUsuario::model()->findAll('M03_id = '.$model->id);
		$this->render('jurate',array(
			'Usuario'=>$tar,
			"check_1"=>$check_1,
			"check_2"=>$check_2,
			'model'=>$model,
			'has1'=>$has1,
			));
	}
	//Para ver las correcciones
	public function actionCorret()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
		$model=M03Tesis::model()->findByPk($check_2->M03_id);
		$model_2=T07ObservacionTesis::model()->findAll("M03_id=".$model->id);
		$this->render('corret',array(
			'Usuario'=>$tar,
			"check_1"=>$check_1,
			"check_2"=>$check_2,
			'model'=>$model,
			'model_2'=>$model_2,
			
			));
	}
	public function actionCrono(){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new M02Cronograma;
		$model_2=new T11Actividad;
		
		if( isset ($_POST['M02Cronograma'])){    
		  $model->attributes=$_POST['M02Cronograma'];
		  $pas=T02PasantiaHasUsuario::model()->find('M05_id='.$tar->id);
		  $model->m04_pasantia_id=$pas->M04_id;
		   $model->save(); 
		     $this->redirect(array('acti','id'=>$model->id,));
		}
		
	$this->render('cronogramaestudiante',array(
			'Usuario'=>$tar,
			'model_7'=>$model,
			'model_3'=>$model_2,
			
			));
	}
	public function actionacti($id){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
	$crono=M02Cronograma::model()->find('id='.$id);
	$model=new T11Actividad;
	if( isset ($_POST['T11Actividad'])){
		  $model->attributes=$_POST['T11Actividad'];
		  $model->M02_id=$id;
		  $model->save();
		
		  $this->redirect(array('acti','id'=>$id,));
		}
	$this->render('actividad',array(
			'Usuario'=>$tar,
			'model_3'=>$model,
			'crono'=>$crono,
			
			
			));
	
	}
	
	public function actionUpd($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['T11Actividad']))
		{
			$model->attributes=$_POST['T11Actividad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	// Subir tesis por parte del estudiante al sistema 
	public function actionSubirt()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$tipo1=P02TipoRelacion::model()->find("Descripcion = 'Tesista'");
		$tipo2=P02TipoRelacion::model()->find("Descripcion = 'Tutor'");
		$estado=P03Status::model()->find("Descripcion = 'Sin revisar'");
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
		$model_1=new M03Tesis;
		$model_2=new T01TesisHasUsuario;
		$model_3=new T01TesisHasUsuario;
		$model_4=new M05Usuario;
		
		$model_5=new T04ConocimientoTesis;
		$model_6=new M05Usuario;
		
		
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
                
               
              
                //si tiene tesis cargando, hay que hacer update
                $update=0;
                if ($check_2 != NULL && $check_2->P02_id == 1) {
                    $model_1 = M03Tesis::model()->find("id= " . $check_2->M03_id);
                    $model_2 = new T01TesisHasUsuario;
                    $model_3 = $check_2;
                    $model_4 = $tar;
                    $model_5=T04ConocimientoTesis::model()->find("M03_id= ".$check_2->M03_id);
                    
                    if($model_5==NULL) 
                        $model_5=new T04ConocimientoTesis;
                    $update = 1;
                    
                }
                
                 $sql = "Select M05_id from t01_tesis_has_usuario where M03_id = ".$model_1->id." and not M05_id = ".$tar->id;
                $comando = Yii::app()->db->createCommand($sql);
                $value=$comando->queryAll();
               // echo print_r($value);
                try{
                    if(count($value)>0)
                   $model_6=  M05Usuario::model()->find("id= ".$value[0]['M05_id']); 
                }  catch (Exception $e){
                    $model_6=new M05Usuario;
                    
                }
               
		
		if(isset($_POST['M03Tesis'])){
            
                    $ced = Yii::app()->request->getPost("Cedula");
                           
                    $x = $_POST['M03Tesis']['P03_id'];
                 
            
                  if($x=="1"){                   
                    $estado=P03Status::model()->find("Descripcion = 'Subiendo'");
                }else{                  
                    $estado=P03Status::model()->find("Descripcion = 'Sin revisar'");
                }
                
			$model_1->attributes=$_POST['M03Tesis'];
			$model_1->Carta_Tutor=CUploadedFile::getInstance($model_1,'Carta_Tutor');
			$model_1->P03_id=$estado->id;
			
			if($update==0&&$model_1->save(false)){
			
                            
                            //cédula de pareja
                             //cédula de pareja
                            if($ced!=NULL){
                               
                                $model_6=  M05Usuario::model()->find("Cedula= ".$ced);
                                //guardar user has tesis
                                $model_7=  new T01TesisHasUsuario;
                                $model_7->M05_id=$model_6->id;
                                $model_7->M03_id=$model_1->id;
                                $model_7->P02_id=$tipo1->id;
                                
                                $model_7->save();
                           
                            }
				// Para subir la relacion con el alumno---------
				
				
				$model_2->M03_id=$model_1->id;
				$model_2->M05_id=$tar->id;
				$model_2->P02_id=$tipo1->id;
				
				$model_2->save();
				// repetir para varios conocimientos
				
				
				//$model_5->M03_id= $model_1->id;
				//$model_5->save();
				
				
				// Para subir la relacion con el profesor
				$prof=M01Profesor::model()->findByPk($_POST['T01TesisHasUsuario']['P02_id']);
                                //en caso de guardar sin enviar y no hayan guardado tutor aún
                                if ($prof != NULL) {
                                $docente = M05Usuario::model()->find("Cedula = '" . $prof->Cedula . "'");

                                if (count($docente) == 0) { //si el profesor no se encuentra en el sistema se crea un usuario temporal no puede entrar en el sistema hasta que no se le habilite un Usuario y clave
                                    //Crea usuario temporal
                                    $sql = "Insert into m05_usuario (id,Cedula,Apellido,Nombre,Correo_Electronico) values (NULL,'" . $prof->Cedula . "','" . $prof->Nombre . "','" . $prof->Apellido . "','" . $prof->Correo_UNET . "')";
                                    $comando = Yii::app()->db->createCommand($sql);
                                    $comando->execute();
                                    $docente2 = M05Usuario::model()->find("Cedula = '" . $prof->Cedula . "'");

                                    // asociar profesor a tesis
                                    $model_3->M03_id = $model_1->id;
                                    $model_3->M05_id = $docente2->id;
                                    $model_3->P02_id = $tipo2->id;

                                    $model_3->save();
                                } else { // si el profesor esta en el sistema 
                                    $model_3->M03_id = $model_1->id;
                                    $model_3->M05_id = $docente->id;
                                    $model_3->P02_id = $tipo2->id;

                                    $model_3->save();
                                }
                            }//end if
                // Para guardar la carta firmada por el tutor en pdf				
                $estructura = Yii::app()->theme->basePath . '/Cartas_tutores/Tesis/' . $model_1->id;
                if (file_exists($estructura) == false) { //VE SI LA CARPETA EXISTE					
                    mkdir($estructura, 0777, true); //CREAR CARPETA CN TODOS LOS PERMISOS
                    $path = "$estructura/$model_1->Carta_Tutor"; //DEFINE LA RUTA DEL DOCUMENTO
                    if ($model_1->Carta_Tutor != null || $model_1->Carta_Tutor != '') {
                        $model_1->Carta_Tutor->saveAs($path);
                    }
                } else {
                    $path="$estructura/$model_1->Carta_Tutor";
		            if($model_1->Carta_Tutor!=null||$model_1->Carta_Tutor!=''){
		                $model_1->Carta_Tutor->saveAs($path);
		            }	                 	
		        }//end else
                        
                        /*if($x=="1")
                            $this->redirect(array('vertesis'));
                        else
		          $this->redirect(array('index'));
                          */
                        }else if($update==1&&$model_1->update()){
                            
                            //cédula de pareja
                             
                            if($ced!=NULL){
                               
                                $model_6=  M05Usuario::model()->find("Cedula= ".$ced);         
                                
                                
                                
                                //guardar user has tesis
                                $model_7=  new T01TesisHasUsuario;
                                $model_7->M05_id=$model_6->id;
                                $model_7->M03_id=$model_1->id;
                                $model_7->P02_id=$tipo1->id;
                               
                                $model_7->save();
                           
                            }
                            // Para subir la relacion con el alumno---------
				
				
				$model_2->M03_id=$model_1->id;
				$model_2->M05_id=$tar->id;
				$model_2->P02_id=$tipo1->id;
                                  $ax = $model_2->find("M03_id= " . $model_1->id);
                    
                                if($ax==NULL){
				
                                    $model_2->save();
                                    
                                }
				// repetir para varios conocimientos
				
				
				//$model_5->M03_id= $model_1->id;
				//$model_5->save();
				
				
				// Para subir la relacion con el profesor
				$prof=M01Profesor::model()->findByPk($_POST['T01TesisHasUsuario']['P02_id']);
                                //en caso de guardar sin enviar y no hayan guardado tutor aún
                                if ($prof != NULL) {
                                $docente = M05Usuario::model()->find("Cedula = '" . $prof->Cedula . "'");

                                if (count($docente) == 0) { //si el profesor no se encuentra en el sistema se crea un usuario temporal no puede entrar en el sistema hasta que no se le habilite un Usuario y clave
                                    //Crea usuario temporal
                                    $sql = "Insert into m05_usuario (id,Cedula,Apellido,Nombre,Correo_Electronico) values (NULL,'" . $prof->Cedula . "','" . $prof->Nombre . "','" . $prof->Apellido . "','" . $prof->Correo_UNET . "')";
                                    $comando = Yii::app()->db->createCommand($sql);
                                    $comando->execute();
                                    $docente2 = M05Usuario::model()->find("Cedula = '" . $prof->Cedula . "'");

                                    // asociar profesor a tesis
                                    $model_3->M03_id = $model_1->id;
                                    $model_3->M05_id = $docente2->id;
                                    $model_3->P02_id = $tipo2->id;

                                    $model_3->save();
                                } else { // si el profesor esta en el sistema 
                                    $model_3->M03_id = $model_1->id;
                                    $model_3->M05_id = $docente->id;
                                    $model_3->P02_id = $tipo2->id;

                                    $model_3->save();
                                }
                            }//end if
                // Para guardar la carta firmada por el tutor en pdf				
                $estructura = Yii::app()->theme->basePath . '/Cartas_tutores/Tesis/' . $model_1->id;
                if (file_exists($estructura) == false) { //VE SI LA CARPETA EXISTE					
                    mkdir($estructura, 0777, true); //CREAR CARPETA CN TODOS LOS PERMISOS
                    $path = "$estructura/$model_1->Carta_Tutor"; //DEFINE LA RUTA DEL DOCUMENTO
                    if ($model_1->Carta_Tutor != null || $model_1->Carta_Tutor != '') {
                        $model_1->Carta_Tutor->saveAs($path);
                    }
                } else {
                    $path="$estructura/$model_1->Carta_Tutor";
		            if($model_1->Carta_Tutor!=null||$model_1->Carta_Tutor!=''){
		                $model_1->Carta_Tutor->saveAs($path);
		            }	                 	
		        }//end else
                        
                        /*if($x=="1")
                            $this->redirect(array('vertesis'));
                        else
		          $this->redirect(array('index'));*/
                        }
                        
                        else{
                            //en caso de error del modelo
                            var_dump($model_1->getErrors());
                            $this->redirect(array('vertesis'));
                        }
			


		}//end if

		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);

		if(count($check_1)>0){
			$this->redirect(array('index'));
                   // $this->redirect(array('vertes'));
		}
		else{
                   
<<<<<<< HEAD
			$this->render('createt',array('Usuario'=>$tar,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,'model_5'=>$model_5,'model_6'=>$model_6));
=======
			$this->render('createt',array('Usuario'=>$tar,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,'model_5'=>$model_5,"check_1"=>$check_1,"check_2"=>$check_2,));
>>>>>>> f8e1cbc5a4bab539654b6aa9164f7b8b0571aadf
		}

		
	}

	//---------------------------------------------------------------FIN DE TESIS----------------------------------------------------------------------

	public  function ActionSubirp(){

		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tipo1=P02TipoRelacion::model()->find("Descripcion = 'Pasante'");
		$estado=P03Status::model()->find("Descripcion = 'Sin revisar'");
		$status=P08Categoria::model()->find("Descripcion = 'Nueva'");
		$model_1=new M06Empresa;	
		$model_2=new M04Pasantia;
		$model_3=new T11Actividad;
		$model_4=new M07TutorExterno;
		$model_5=new T02PasantiaHasUsuario;	

		$model_6=new T05ConocimientoPasantias;	
		$model_7=new M02Cronograma;
		

		if(isset($_POST['M04Pasantia']))
		{	

			//--------------------------Empresa-----------------------------------------

			$model_2->attributes=$_POST['M04Pasantia']; // datos de las pasantias 

			if($model_2->M06_id==null){ // si no selecciono empresa es por que va cargar una nueva

				$model_1->attributes=$_POST['M06Empresa'];
					

				if($model_1->validate()){	
					$model_1->status='1';				
					$model_1->save();
					
					$model_2->M06_id=$model_1->id;// Guarda la nueva empresa y se asocia el id de esta
				}				
			}
			
				
				
			//--------------------------Tutor Externo---------------------------------------
			$model_4->attributes=$_POST['M07TutorExterno']; //Datos del tutor externo

			if($model_4->validate()){
					
					if($model_4->save()){
						$estructura=Yii::app()->theme->basePath.'/Curriculum/'.$model_4->id;
						if(file_exists($estructura)==false){ //VE SI LA CARPETA EXISTE
							
				            mkdir($estructura,0777,true);//CREAR CARPETA CN TODOS LOS PERMISOS
				            $path="$estructura/$model_4->Curriculum";//DEFINE LA RUTA DEL DOCUMENTO
							if($model_4->Curriculum!=null||$model_4->Curriculum!=''){
				                 $model_4->Curriculum->saveAs($path);
				            }	                 	
				       	}
				        else{	                 	
				                 	 $path="$estructura/$model_4->Curriculum";
				            if($model_4->Curriculum!=null||$model_4->Curriculum!=''){
				                $model_4->Curriculum->saveAs($path);
				            }	                 	
				        }
				    }
			}


			//---------------------------Pasantias has Usuario---------------------------------
			$model_5->M04_id=$model_2->id;
			$model_5->M05_id=$tar->id;
			$model_5->P02_id=$tipo1->id;			
			$model_5->M07_id=$model_4->id;
			$model_5->save();
			

			$this->redirect(array('index'));

			//---------------------------Cronograma de actividades----------------------------

		}
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);

		if(count($check_2)>0){
			$this->redirect(array('index'));
		}
		else{

			$this->render('createp',array('Usuario'=>$tar,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,'model_7'=>$model_7,"check_1"=>$check_1,"check_2"=>$check_2,));

		}
	
	}
	//--------------------------------------------------------------------------------------------------------------
	 

	//---------------------------------------PASANTIAS--------------------------------------------------------------
		// para ver los jurados de las pasantias
	public function actionJurap()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
		$model=M04Pasantia::model()->findByPk($check_1->M04_id);
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$model->id);
		$this->render('jurapa',array(
			'Usuario'=>$tar,
			"check_1"=>$check_1,
			"check_2"=>$check_2,
			'model'=>$model,
			'has1'=>$has1,
			));
	}
		//Para ver las correcciones
	public function actionCorrep()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);
		$model=M04Pasantia::model()->findByPk($check_1->M04_id);
		$model_2=T10ObservacionPasantias::model()->findAll("M04_id=".$model->id);
		$this->render('correp',array(
			'Usuario'=>$tar,
			"check_1"=>$check_1,
			"check_2"=>$check_2,
			'model'=>$model,
			'model_2'=>$model_2,
			
			));
	}
//-----
	public function actionVerpasantias()
	{		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$check_1=T02PasantiaHasUsuario::model()->find("M05_id= ".$tar->id);
		$check_2=T01TesisHasUsuario::model()->find("M05_id= ".$tar->id);

		$model=M04Pasantia::model()->findByPk($check_1->M04_id);
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$model->id);
		$status=P03Status::model()->findByPk($model->P03_id);
		$this->render('verpas',array(
			'Usuario'=>$tar,
			"check_1"=>$check_1,
			"check_2"=>$check_2,
			'model'=>$model,
			'has1'=>$has1,
			'Sta'=>$status,
			));
	}




}