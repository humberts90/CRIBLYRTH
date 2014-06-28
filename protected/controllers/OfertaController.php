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

		$criteria = new CDbCriteria();
		$criteria->select = array("*");
		$criteria->condition = "P03_id = :id";
		$criteria->params = array(':id'=>$modelStatus->id);
		$cuentaT = count($criteria);
		$cuentaT =  M03Tesis::model()->count($criteria);
		//pagination
		$pagesT = new CPagination($cuentaT);
		$pagesT->setPageSize(5);
		$pagesT->applyLimit($criteria);
		$modelt = M03Tesis::model()->findAll($criteria);
		$model_t=new CArrayDataProvider($modelt);


 		$cuentaP = count($criteria);
		$cuentaP=  M04Pasantia::model()->count($criteria);
		//pagination
		$pagesP = new CPagination($cuentaP);
		$pagesP->setPageSize(5);
		$pagesP->applyLimit($criteria);
		$modelp = M04Pasantia::model()->findAll($criteria);
		$model_p=new CArrayDataProvider($modelp);

		$this->render('oferta',array('Usuario'=>$tar, 'tesis'=>$model_t, 'pasantias'=>$model_p, 'pagesT'=>$pagesT, 'pagesP'=>$pagesP));
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

		$model3 = T02PasantiaHasUsuario::model()->find("P02_id ='".$model2->id."' and M04_id='".$id."'");

		$model4 = M05Usuario::model()->findByPk($model3->M05_id);		


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