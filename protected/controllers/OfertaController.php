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
				
			array('allow',  // deny all users
				'users'=>array('*'),
			),
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

		$model_t= M03Tesis::model()->findAll("P03_id = ".$modelStatus->id);
		$model_p =M04Pasantia::model()->findAll("P03_id = ".$modelStatus->id);

		$this->render('oferta',array('Usuario'=>$tar, 'tesis'=>$model_t, 'pasantias'=>$model_p));
	}

	public function actionDetalle_t($id)
	{	
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M03Tesis::model()->findByPk($id);

		$model2 = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");

		$model3 = T01TesisHasUsuario::model()->find("P02_id ='".$model2->id."' and M03_id='".$id."'");

		$model4 = M05Usuario::model()->find("id = '".$model3->M05_id."'");		


		$this->render("detalle_t",array('Usuario'=>$tar,'model'=>$model,'tutor'=>$model4));
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

		$model2 = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");

		$model3 = T02PasantiasHasUsuario::model()->find("P02_id ='".$model2->id."' and M04_id='".$id."'");

		$model4 = M05Usuario::model()->find("id = '".$model3->M05_id."'");		


		$this->render("detalle_p",array('Usuario'=>$tar,'model'=>$model,'tutor'=>$model4));
	}

	public function actionPostular_p($id)
	{		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M04Pasantia::model()->findByPk($id);

		$this->render("postular_p",array('Usuario'=>$tar,'model'=>$model));
	}

}
?>