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
		$modelStatus = P03Status::model()->find("Descripcion = 'Aprobada'");
		$criteria=new CDbCriteria;		
		$criteria->condition='P03_id= '.$modelStatus->id;

		$dataProvider= new CActiveDataProvider(M03Tesis::model(), array('criteria'=>$criteria,));
		$this->render('test',array('Usuario'=>$tar,'dataProvider'=>$dataProvider));
	}
	public function actionActaeva($id){
		$dir=T01TesisHasUsuario::model()->findAll("M03_id =".$id);

		foreach ($dir as $value) {
			if($value->id=="2"){
				$tur=M05Usuario::model()->find("id =".$value->M05_id);
			}
		}

		// tiene que tener 5 o 6 variables 
		$mPDF1->WriteHTML($this->renderPartial('cont_1',array(
			'Normbre_alumno'=>$tar,
			'Nombre_tutor'=>$jefe,
			'Nombre_Jurado_1'=>$tesis,
			'Nombre_Jurado_2'=>$nombre_c1,
			'Nombre_Jurado_3'=>$nombre_c2,
			), true));


		

	}
}