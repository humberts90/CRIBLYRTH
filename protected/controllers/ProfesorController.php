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

	public function actionIndex(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('index',array('Usuario'=>$tar,));
	}
	public function actionOferta_t()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M03Tesis;

		if(isset($_POST["M03Tesis"]))
		{
			$model->attributes=$_POST["M03Tesis"];

			if($model->save())
			{
				$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");
				$modelRelacion = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");
				
				$modelAsoc = new T01TesisHasUsuario;
				$modelAsoc->M05_id = $tar->id;
				$modelAsoc->M03_id = $model->id;
				$modelAsoc->P03_id = $modelStatus->id;
				$modelAsoc->P02_id = $modelRelacion->id;

				$modelAsoc->save();
			}

		}

		$this->render('oferta',array(
			'Usuario'=>$tar,
			'model'=>$model,
			
			));
	}

	public function actionOferta_p()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M04Pasantia;
		$modelExterno=new M07TutorExterno; 

		if(isset($_POST["M04Pasantia"]))
		{
			$model->attributes=$_POST["M04Pasantia"];

			if($model->save())
			{
				$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");
				$modelRelacion = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");
				
				$modelAsoc = new T02PasantiaHasUsuario;
				$modelAsoc->M05_id = $tar->id;
				$modelAsoc->M04_id = $model->id;
				$modelAsoc->P03_id = $modelStatus->id;
				$modelAsoc->P02_id = $modelRelacion->id;
				$modelAsoc->M07_id = $_POST["M07TutorExterno"]["id"]; 				

				$modelAsoc->save();
			}

		}


		$this->render('ofertap',array(
			'Usuario'=>$tar,
			'model'=>$model,
			'externo'=>$modelExterno,
			));
	}
	
}
?>