<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */

	

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
		public function accessRules()
	{
		return array(
			array('allow',  
				'actions'=>array('admin'),
					'roles'=>array('Administrador'),
					'users'=>array('@'),
			),
		
		
		);
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model=T09Noticias::model()->findAll();
		$this->render('index',array('model'=>$model));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
	
		$this->render('contact');
	}
	
		public function actionPasantias()
	{
	
		$this->render('pasantias');
	}
			public function actionTesis()
	{
	
		$this->render('tesis');
	}
	public function actionNoticia($id){
		$model=T09Noticias::model()->findByPk($id);
		$this->render('noticia',array('model'=>$model));	
	}
	public function actionAdmin(){
	
		
		$this->render('admin');	


	}
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				if(Yii::app()->authManager->checkAccess('Administrador',Yii::app()->user->id)){
							$this->redirect(Yii::app()->user->returnUrl.'/site/admin');
					}
					if(Yii::app()->authManager->checkAccess('Comision',Yii::app()->user->id)){
						$this->redirect(Yii::app()->user->returnUrl.'/comision/index');
					}
					if(Yii::app()->authManager->checkAccess('Profesor',Yii::app()->user->id)){
						$this->redirect(Yii::app()->user->returnUrl.'/profesor/index');
					}
					if(Yii::app()->authManager->checkAccess('Alumno',Yii::app()->user->id)){
						$this->redirect(Yii::app()->user->returnUrl.'/estudiante/index');
					}
					if(Yii::app()->authManager->checkAccess('Secretaria',Yii::app()->user->id)){
						$this->redirect(Yii::app()->user->returnUrl.'/secretaria/index');
					}
					
					
					


			}
				
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}