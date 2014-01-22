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

}