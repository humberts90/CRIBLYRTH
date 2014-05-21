<?php

class OfertaController extends Controller {
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
	 * This method is used by the 'accessControl' filter. pfdsjgfoishigfoi
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
<<<<<<< HEAD
			
			array('allow', 
=======
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
>>>>>>> ac105fb110649766139b543f27069193945cd6b9
				'users'=>array('*'),
			)
		);
	}
	public function actionIndex(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
	//	$listado = 
		$this->render('index',array('Usuario'=>$tar,));
	}
	public function actionListar()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");

		$modelAsoc = T01TesisHasUsuario::model()->findAll("P03_id = '".$modelStatus->id."'");
		$model_t = array();
		$a=0;
		foreach ($modelAsoc as $asoc) 
		{
			$model_t[$a] = M03Tesis::model()->find("id = '".$asoc->M03_id."'");
			$a++;
		}

		$modelAsoc = T02PasantiaHasUsuario::model()->findAll("P03_id = '".$modelStatus->id."'");
		$model_p = array();
		$a=0;
		foreach ($modelAsoc as $asoc) 
		{
			$model_p[$a] = M04Pasantia::model()->find("id = '".$asoc->M04_id."'");
			$a++;
		}


		$this->render('oferta',array('Usuario'=>$tar, 'tesis'=>$model_t, 'pasantias'=>$model_p));
	}

	public function actionDetalle_t($id)
	{		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M03Tesis::model()->findByPk($id);

		$this->render("detalle_t",array('Usuario'=>$tar,'model'=>$model));
	}

	public function actionPostular_t($id)
	{		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M03Tesis::model()->findByPk($id);

		$this->render("postular_t",array('Usuario'=>$tar,'model'=>$model));
	}


	public function actionDetalle_p($id)
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M04Pasantia::model()->findByPk($id);

		$this->render("detalle_p",array('Usuario'=>$tar,'model'=>$model));
	}

	public function actionPostular_p($id)
	{		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M04Pasantia::model()->findByPk($id);

		$this->render("postular_p",array('Usuario'=>$tar,'model'=>$model));
	}

}
?>