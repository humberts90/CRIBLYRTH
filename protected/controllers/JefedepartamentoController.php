<?php

class JefedepartamentoController extends Controller {

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
						'roles'=>array('Jefe del Departamento'),
						'users'=>array('@'),
				),	
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'roles'=>array('Secretaria'),
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
	//----------------Reporte de listado de profesores-------------------------------------------

	public function actionProf(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		$model=new M01Profesor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['M01Profesor']))
			$model->attributes=$_POST['M01Profesor'];

	  	$this->render('prof',array(
        'dataProvider'=>$model->search(),
        'model'=>$model,
        'Usuario'=>$tar,
        )); 		
	}
	//------------------------Resporte de tesistas-------------------------------------------------

	public function actionTes(){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		

		$criteria=new CDbCriteria;		
		$criteria->condition='P02_id = 1';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(T01TesisHasUsuario::model(), array('criteria'=>$criteria,));

	  	$this->render('tesis',array(
        'dataProvider'=>$dataProvider,
       // 'model'=>$model,
        'Usuario'=>$tar,
        )); 
	}

	//----------------------Reporte de pasantes --------------------------------------------------------

	public function actionPas(){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		

		$criteria=new CDbCriteria;		
		$criteria->condition='P02_id = 1';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(T02PasantiaHasUsuario::model(), array('criteria'=>$criteria,));

	  	$this->render('pasantias',array(
        'dataProvider'=>$dataProvider,
       // 'model'=>$model,
        'Usuario'=>$tar,
        )); 
	}

}

?>