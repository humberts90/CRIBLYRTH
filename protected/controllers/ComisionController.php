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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'roles'=>array('Administrador'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new T03Acta;
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		if(isset($_POST['T03Acta']))
		{
			$model->attributes=$_POST['T03Acta'];
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
		$model=new T03Acta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['T03Acta']))
			$model->attributes=$_GET['T03Acta'];

		$this->render('adminac',array(
			'model'=>$model,
		));
	}
		public function actionUpdate_ac($id)
	{
		$model=T03Acta::model()->findByPk($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['T03Acta']))
		{
			$model->attributes=$_POST['T03Acta'];
			if($model->save())
				$this->redirect(array('view_ac','id'=>$model->id));
		}

		$this->render('update_ac',array(
			'model'=>$model,
		));
	}
	public function actionDelete_ac($id)
	{
		$model=T03Acta::model()->findByPk($id);
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('adminac'));
	}
	public function actionView_ac($id)
	{
		$this->render('view_ac',array(
			'model'=>T03Acta::model()->findByPk($id),
		));
	}
	//---------------------------Noticias-----------------------------------------------------------------

	public function actionCargarN(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new T09Noticias;
		if(isset($_POST['T09Noticias'])){
			$model->attributes=$_POST['T09Noticias'];
			if($model->save())
				$this->redirect(array('noticia','id' => $model->id));
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
		$model->unsetAttributes();  // clear any default values
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
			if($model->save())
				$this->redirect(array('noticia','id'=>$model->id));
		}

		$this->render('update_nt',array(
			'model'=>$model,
			'Usuario'=>$tar,
		));
	}
	//---------------------------------------Evaluar Propuestas----------------------------------------------------
	public function actionTesis(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new M03Tesis('search');
		$model->unsetAttributes();

		$this->render('list_1',array(
			'Usuario'=>$tar,
			 'dataProvider'=>$model->search(),
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
		$model=new T06Observacion;
		$tes=T01TesisHasUsuario::model()->findAll("M03_id =".$tesis->id);
		$prof=M01Profesor::model()->findAll();
		$tipo1=P02TipoRelacion::model()->find("Descripcion = 'Jurado 1'");
		$tipo2=P02TipoRelacion::model()->find("Descripcion = 'Jurado 2'");
		$tipo3=P02TipoRelacion::model()->find("Descripcion = 'Jurado Suplente'");
		$jurado1=$_REQUEST['j1'];
		$jurado2=$_REQUEST['j2'];
		$jurado3=$_REQUEST['j3'];
		$ju1=M01Profesor::model()->findByPk($jurado1);
		$ju2=M01Profesor::model()->findByPk($jurado2);
		$ju3=M01Profesor::model()->findByPk($jurado3);
		

		if(isset($_POST['T06Observacion']))
		{
			$model->attributes=$_POST['T06Observacion'];
			$temp=$_POST['T06Observacion']['M03_id'];
			$model->M03_id=$tesis->id;
			$model->Fecha=date('Y-m-d');


			if(/*$model->save()*/true){
			$sql="Insert into t01_tesis_has_usuario (id,M03_id,M05_id,P03_id,P02_id) values (NULL,".$tesis->id."," .$prof->Nombre.",'".$prof->Apellido."','".$prof->Correo_UNET."')";
					$comando = Yii::app() -> db -> createCommand($sql);
					$comando -> execute(); 
				foreach ($tes as $value) {
					$nue=T01TesisHasUsuario::model()->findByPk($value->id);
					$nue->P03_id=$temp;
					//$nue->save();
				
				}
				echo "<script>alert('Evaluacion realizada con exito');</script>";
				//$this->redirect(array('tesis'));
			}
				
		}
		$this->render('evalua',array(
			'Usuario'=>$tar,
			'tes'=>$tesis,
			'model'=>$model,
			'profesor'=>$prof,
			));
	}

}