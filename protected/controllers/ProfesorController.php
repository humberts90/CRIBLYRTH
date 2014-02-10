<?php

class ProfesorController extends Controller{
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
	public function actionOferta_t(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M03Tesis();
		$this->render('oferta',array(
			'Usuario'=>$tar,
			'model'=>$model,
			));
	}


	//-----------------------------Constancias------------------------------------------
	public function actionConst($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$jefe_1=P01Rol::model()->find("nombre = 'Jefe del Departamento'");
		$jefe_2=T08UsuarioHasRol::model()->find("P01_id = ".$jefe_1->id);
		$jefe=M05Usuario::model()->findByPk($jefe_2->M05_id);
		$tesis=M03Tesis::model()->findByPk($id);


		$this->render('cont_1',array(
			'Usuario'=>$tar,
			'jefe'=>$jefe,
			'tesis'=>$tesis,
			));


	}
	public function actionTesis(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=T01TesisHasUsuario::model()->findAll('M05_id = '.$tar->id);

		
		

		$this->render('list_1',array(
			'Usuario'=>$tar,			 
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
	
}

?>