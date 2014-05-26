<?php
class SecretariaController extends Controller {
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'users'=>array('@'),
			),
		
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('index',array('Usuario'=>$tar,));
	}
	public function actionEvalua(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M03Tesis::model()->findAll();
		$this->render('index',array('Usuario'=>$tar,));
		
	}
}