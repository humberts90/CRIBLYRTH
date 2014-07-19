<?php

class EmpresaController extends Controller{
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
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'roles'=>array('Empresa'),
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

	public function actionListar(){
	
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=T02PasantiaHasUsuario::model()->findAll('M05_id = '.$tar->id);

		$criteria = new CDbCriteria();
		$criteria->select = array("*");
		$criteria->condition = "M05_id = :id";
		$criteria->params = array(':id'=>$tar->id);
		$cuenta = count($criteria);
		$cuenta =  T02PasantiaHasUsuario::model()->count($criteria);
		//pagination
		$pages = new CPagination($cuenta);
		$pages->setPageSize(5);
		$pages->applyLimit($criteria);
		$modell = T02PasantiaHasUsuario::model()->findAll($criteria);
		//$model = new CArrayDataProvider($modell);		
		

		$this->render('listar',array(
			'Usuario'=>$tar,			 
			 'model'=>$modell,
			 'pages'=>$pages,
			 
			));
	}

	public function actionOferta_r()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M04Pasantia;
		$modelExterno=new M07TutorExterno; 

		if(isset($_POST["M04Pasantia"]))
		{
			$model->attributes=$_POST["M04Pasantia"];

			$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");
			
			$model->P03_id = $modelStatus->id;

			if($model->save())
			{
				$modelRelacion = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");
				
				$modelAsoc = new T02PasantiaHasUsuario;
				$modelAsoc->M05_id = $tar->id;
				$modelAsoc->M04_id = $model->id;
				$modelAsoc->P02_id = $modelRelacion->id;
				$modelAsoc->M07_id = $_POST["M07TutorExterno"]["id"]; 				

				$modelAsoc->save();

				$this->render('index',array('Usuario'=>$tar,));
			}

		}else{


		$this->render('oferta_r',array(
			'Usuario'=>$tar,
			'model'=>$model,
			'externo'=>$modelExterno,
			));
		}
	}


	public function actionDetalle($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$Pasantia=M04Pasantia::model()->findByPk($id);
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$Pasantia->id);
		$this->render('detalle',array(
			'Usuario'=>$tar,
			'model'=>$Pasantia,
			'has1'=>$has1,
			));
	}

}
?>