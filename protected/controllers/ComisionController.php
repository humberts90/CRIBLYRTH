<?php

class ComisionController extends Controller {

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
	 * Specifies the access control rules.
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
			    array('allow',  
						'roles'=>array('Jefe del Departamento'),
						'users'=>array('@'),
				),	
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'roles'=>array('Comisión del Tap'),
					'users'=>array('@'),
				),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		
		);
	}
	public function actionIndex()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('index',array('Usuario'=>$tar,));
	}

	//---------------------------Actas-------------------------------------------------
	public function actionActa(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('acta',array('Usuario'=>$tar));
	}
	// para redactar las catas
	public function actionRedactar()
	{
		$model=new T03ActaReunion;
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		if(isset($_POST['T03ActaReunion']))
		{
			$model->attributes=$_POST['T03ActaReunion'];
			$model->M05_id=$tar->id;
			$model->Anexo=CUploadedFile::getInstance($model,'Anexo');	
			if($model->save()){
				//Guardar Anexos
				$model->Anexo=CUploadedFile::getInstance($model,'Anexo');			
				$estructura=Yii::app()->theme->basePath.'/Actas/Anexo/'.$model->id;
				if(file_exists($estructura)==false){ //VE SI LA CARPETA EXISTE
					
		            mkdir($estructura,0777,true);//CREAR CARPETA CN TODOS LOS PERMISOS
		            $path="$estructura/$model->Anexo";//DEFINE LA RUTA DEL DOCUMENTO
					if($model->Anexo!=null||$model->Anexo!=''){
		                 $model->Anexo->saveAs($path);
		            }	                 	
		       	}
		        else{	                 	
		                 	$path="$estructura/$model->Anexo";
		            if($model->Anexo!=null||$model->Anexo!=''){
		                $model->Anexo->saveAs($path);
		            }	                 	
		        }

				$this->redirect(array('view_ac','id'=>$model->id));
			}
		}

		$this->render('createac',array(
			'model'=>$model,'Usuario'=>$tar,
		));
	}
	public function actionAdminac(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new T03ActaReunion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['T03ActaReunion']))
			$model->attributes=$_GET['T03ActaReunion'];

		$this->render('adminac',array(
			'model'=>$model,
			'Usuario'=>$tar,
		));
	}
		public function actionUpdate_ac($id)
	{
		$model=T03ActaReunion::model()->findByPk($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['T03ActaReunion']))
		{
			$model->attributes=$_POST['T03ActaReunion'];
			if($model->save())
				$this->redirect(array('view_ac','id'=>$model->id));
		}

		$this->render('update_ac',array(
			'model'=>$model,
		));
	}
	public function actionDelete_ac($id)
	{
		$model=T03ActaReunion::model()->findByPk($id);
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('adminac'));
	}
	public function actionView_ac($id)
	{
		$this->render('view_ac',array(
			'model'=>T03ActaReunion::model()->findByPk($id),
		));
	}
	//---------------------------Noticias-----------------------------------------------------------------

	public function actionCargarN(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new T09Noticias;
		
		if(isset($_POST['T09Noticias']))
		{
			$model->attributes=$_POST['T09Noticias'];
			$model->Imagen=CUploadedFile::getInstance($model,'Imagen');
			$model->M05_id=$tar->id;
			if($model->save()){

				$estructura=Yii::app()->theme->basePath.'/Noticias/'.$model->id;
				if(file_exists($estructura)==false){ //VE SI LA CARPETA EXISTE
					
		            mkdir($estructura,0777,true);//CREAR CARPETA CN TODOS LOS PERMISOS
		            $path="$estructura/$model->Imagen";//DEFINE LA RUTA DEL DOCUMENTO
					if($model->Imagen!=null||$model->Imagen!=''){
		                 $model->Imagen->saveAs($path);
		            }	                 	
		       	}
		        else{	                 	
		                 	$path="$estructura/$model->Imagen";
		            if($model->Imagen!=null||$model->Imagen!=''){
		                $model->Imagen->saveAs($path);
		            }	                 	
		        }
		        $this->redirect(array('noticia','id'=>$model->id));
			}
				
		}

		$this->render('nuevan',array('noticia'=>$model,'Usuario'=>$tar));

	}
	public function loadnoticia($id){
		return T09Noticias::model()->findByPk($id);
	}
	public function actionNoticia($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('ver',array('model'=>$this->loadnoticia($id),'Usuario'=>$tar));
	}
	public function actionNoti(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('noticia',array('Usuario'=>$tar));
	}

	public function actionAdmnot()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new T09Noticias('search');
		$model->unsetAttributes();  
		if(isset($_GET['T09Noticias']))
			$model->attributes=$_GET['T09Noticias'];

		$this->render('admin_nt',array(
			'model'=>$model,
			'Usuario'=>$tar,
		));
	}
	public function actionDelete_nt($id)
	{
		$this->loadnoticia($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('adminnot'));
	}

	public function actionUpdate_nt($id)
	{
		$model=$this->loadnoticia($id);
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
	
		if(isset($_POST['T09Noticias']))
		{
			$model->attributes=$_POST['T09Noticias'];
			$model->Imagen=CUploadedFile::getInstance($model,'Imagen');
			$model->M05_id=$tar->id;
			if($model->save()){

				$estructura=Yii::app()->theme->basePath.'/Noticias/'.$model->id;
				if(file_exists($estructura)==false){ //VE SI LA CARPETA EXISTE
					
		            mkdir($estructura,0777,true);//CREAR CARPETA CN TODOS LOS PERMISOS
		            $path="$estructura/$model->Imagen";//DEFINE LA RUTA DEL DOCUMENTO
					if($model->Imagen!=null||$model->Imagen!=''){
		                 $model->Imagen->saveAs($path);
		            }	                 	
		       	}
		        else{	                 	
		                 	$path="$estructura/$model->Imagen";
		            if($model->Imagen!=null||$model->Imagen!=''){
		                $model->Imagen->saveAs($path);
		            }	                 	
		        }
		        $this->redirect(array('noticia','id'=>$model->id));
			}
				
		}

		$this->render('update_nt',array(
			'model'=>$model,
			'Usuario'=>$tar,
		));
	}
	//---------------------------------------Evaluar Propuestas de tesis----------------------------------------------------
	public function actionTesis(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new M03Tesis();
		$criteria=new CDbCriteria;		
		$criteria->condition='P03_id= 2';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(M03Tesis::model(), array('criteria'=>$criteria,));

		$this->render('list_1',array(
			'Usuario'=>$tar,
			 'dataProvider'=>$dataProvider,
			 'model'=>$model,
			));
	}
	public function actionTesdeta($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M03Tesis::model()->findByPk($id);
		$has1=T01TesisHasUsuario::model()->findAll('M03_id = '.$tesis->id);
		$this->render('test',array(
			'Usuario'=>$tar,
			'model'=>$tesis,
			'has1'=>$has1,
			));
	}
	public function actionEvalua($id){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M03Tesis::model()->findByPk($id);
		$model=new T07ObservacionTesis;
		$tes=T01TesisHasUsuario::model()->findAll("M03_id =".$tesis->id);
		$conotes=T04ConocimientoTesis::model()->findAll("M03_id= ".$tesis->id);
		$temporal=M03Tesis::model()->findByPk($id);
		$prof=T08Usuario_has_rol::model()->findAll("P01_id = 3");
		$tipo1=P02TipoRelacion::model()->find("Descripcion = 'Jurado 1'");
		$tipo2=P02TipoRelacion::model()->find("Descripcion = 'Jurado 2'");
		$tipo3=P02TipoRelacion::model()->find("Descripcion = 'Jurado Suplente'");
		$jura1=new T01TesisHasUsuario;
		

		if(isset($_POST['T07ObservacionTesis']))
		{
				$jurado1=$_REQUEST['j1'];
				$jurado2=$_REQUEST['j2'];
				$jurado3=$_REQUEST['j3'];
				$ju1=M01Profesor::model()->findByPk($jurado1);
				$ju2=M01Profesor::model()->findByPk($jurado2);
				$ju3=M01Profesor::model()->findByPk($jurado3);
			$model->attributes=$_POST['T07ObservacionTesis'];
			$temp=$_POST['T07ObservacionTesis']['M03_id'];
			$model->M03_id=$tesis->id;
			$model->Fecha=date('Y-m-d');

			
			if($model->save()){

				
				$sql1="INSERT INTO t01_tesis_has_usuario (id,M03_id,M05_id,P02_id) VALUES (Null,'".$tesis->id."','".$jurado1."','".$tipo1->id."')";
				$sql2="INSERT INTO t01_tesis_has_usuario (id,M03_id,M05_id,P02_id) VALUES (Null,'".$tesis->id."','".$jurado2."','".$tipo2->id."')";
				$sql3="INSERT INTO t01_tesis_has_usuario (id,M03_id,M05_id,P02_id) VALUES (Null,'".$tesis->id."','".$jurado3."','".$tipo3->id."')";
				
				$comand=Yii::app()->db->createCommand($sql1);
				$comand->execute();

				$comand=Yii::app()->db->createCommand($sql2);
				$comand->execute();

				$comand2=Yii::app()->db->createCommand($sql3);
				$comand2->execute();
				$tesis=$temporal;
				$tesis->P03_id=$temp;
				$tesis->Fecha_Aprobación=date('Y-m-d');
				if($tesis->save()){
				echo "<script>alert('Evaluacion realizada con exito');</script>";
				$this->redirect(array('tesis'));

				}

			

			
				
				
			}
			
				
		}

		$this->render('evalua',array(
			'Usuario'=>$tar,
			'tes'=>$tesis,
			'model'=>$model,
			'profesor'=>$prof,
			'conocimiento'=>$conotes,
			));
	}

	//---------------------------------------------Evaluar Propuestas de pasantias----------------------------------------------------------------------------------
	public function actionPasantias(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new M04Pasantia();
		$criteria=new CDbCriteria;
		$criteria->condition='P03_id= 2';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(M04Pasantia::model(), array('criteria'=>$criteria,));

		$this->render('list_2',array(
			'Usuario'=>$tar,
			 'dataProvider'=>$model->search(),
			 'model'=>$model,
			));
	}
	public function actionPasdeta($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M04Pasantia::model()->findByPk($id);
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$tesis->id);
		$this->render('test_2',array(
			'Usuario'=>$tar,
			'model'=>$tesis,
			'has1'=>$has1,
			));
	}
	public function actionCronograma($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$cronos=M02Cronograma::model()->findAll("m04_pasantia_id = '".$id."'");
		$this->render('cronogramas',array('Usuario'=>$tar,'cronos'=>$cronos,));
	}
	public function actionCrono($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$psa=M02Cronograma::model()->findByPk($id);
		$datos=T11Actividad::model()->findAll("M02_id = ".$id);
		if(count($datos)>0){
			foreach ($datos as $value) {
				$data[] = array(
		  		'label' => $value->Descripcion,
		  		'start' => $value->Fecha_inicio, 
			     'end'   => $value->Fecha_Fin,
				);
			}
			$this->render('gantt',array(
			'data'=>$data,
			'proy'=>$psa,
			'Usuario'=>$tar,
			));
		}
		else{
			$this->redirect(array('cronograma','id'=>$psa->m04_pasantia_id));
		}	
		
	}

}