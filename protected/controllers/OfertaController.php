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

	public function actionTesis()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");

		$criteria = new CDbCriteria();
		$criteria->select = array("*");
		$criteria->condition = "P03_id = :id AND (fecha_val = '0000-00-00' OR fecha_val > curdate())";

		$criteria->params = array(':id'=>$modelStatus->id);
		$cuentaT = count($criteria);
		$cuentaT =  M03Tesis::model()->count($criteria);
		//pagination
		$pagesT = new CPagination($cuentaT);
		$pagesT->setPageSize(5);
		$pagesT->applyLimit($criteria);
		$modelt = M03Tesis::model()->findAll($criteria);

		foreach($modelt as $t)
		{
			$t->Introduccion = strip_tags($t->Introduccion);
		}

		$model_t=new CArrayDataProvider($modelt);

		$this->render('lTesis',array('Usuario'=>$tar, 'tesis'=>$model_t, 'pagesT'=>$pagesT));
	}

	public function actionPasantias()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");

		$criteria = new CDbCriteria();
		$criteria->select = array("*");
		$criteria->condition = "P03_id = :id AND (fecha_val = '0000-00-00' OR fecha_val > curdate())";

		$criteria->params = array(':id'=>$modelStatus->id);
		


 		$cuentaP = count($criteria);
		$cuentaP=  M04Pasantia::model()->count($criteria);
		//pagination
		$pagesP = new CPagination($cuentaP);
		$pagesP->setPageSize(5);
		$pagesP->applyLimit($criteria);
		$modelp = M04Pasantia::model()->findAll($criteria);

		foreach ($modelp as $p)
		{
			$p->Descripcion_Trabajo = strip_tags($p->Descripcion_Trabajo);
		}

		$model_p=new CArrayDataProvider($modelp);

		$this->render('lPasantias',array('Usuario'=>$tar, 'pasantias'=>$model_p, 'pagesP'=>$pagesP));
	}

	public function actionDetalle_t($id)
	{	
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model = M03Tesis::model()->findByPk($id);

		$model->Introduccion = strip_tags($model->Introduccion);
		$model->Planteamiento_Problema = strip_tags($model->Planteamiento_Problema);

		$model2 = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");

		$model3 = T01TesisHasUsuario::model()->find("P02_id ='".$model2->id."' and M03_id='".$id."'");

		$model4 = M05Usuario::model()->find("id = '".$model3->M05_id."'");	

		$model_aux = T04ConocimientoTesis::model()->find("M03_id='".$model->id."'");

		$model5 = null;
		if(isset($model_aux->P11_id))
		$model5 = P11Conocimientos::model()->find("id = '".$model_aux->P11_id."'");


		$this->render("detalle_t",array('Usuario'=>$tar,'model'=>$model,'tutor'=>$model4, 'conocimiento' => $model5));
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

		$model->Descripcion_Trabajo = strip_tags($model->Descripcion_Trabajo);
		$model->Planteamiento_Problema = strip_tags($model->Planteamiento_Problema);

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