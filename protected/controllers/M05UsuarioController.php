<?php

class M05UsuarioController extends Controller
{
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new M05Usuario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['M05Usuario']))
		{
			$model->attributes=$_POST['M05Usuario'];
			$contrasena=$_POST['M05Usuario']['Clave'];
			$model->Clave=$model->hashPassword($contrasena,$session=$model->generateSalt());
			$model->session=$session;
			if($model->save())
			{
				$modelRol = P01Rol::model()->findAll();
				
				foreach($modelRol as $rol)
				{
					if($_POST["Rol"][$rol->id]==1)
					{
						$item = new T08UsuarioHasRol;
						
						$item->M05_id=$model->id;
						$item->P01_id=$rol->id;
						
						$item->save();
						$auth=Yii::app()->authManager;
						$nombre=P01Rol::model()->find("id=".$item->P01_id);
						$auth->assign($nombre->nombre,$model->Usuario);

					}
				}
			
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$auth=Yii::app()->authManager;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$asocia=T08Usuario_has_rol::model()->find('M05_id='.$model->id);
		if(count($asocia)>1){
				foreach ($asocia as $tem) {
					$auth->revoke($tem->p01->nombre,$model->Usuario);
				}
		}
		else{
			$auth->revoke($asocia->p01->nombre,$model->Usuario);	
		}
		if(isset($_POST['M05Usuario']))
		{
			$model->attributes=$_POST['M05Usuario'];
			$contrasena=$_POST['M05Usuario']['Clave'];
			$model->Clave=$model->hashPassword($contrasena,$session=$model->generateSalt());
			$model->session=$session;
			if($model->save())
			{
				$modelRol = P01Rol::model()->findAll();
				
				foreach($modelRol as $rol)
				{
					if($_POST["Rol"][$rol->id]==1)
					{
						$item = new T08UsuarioHasRol;
						
						$item->M05_id=$model->id;
						$item->P01_id=$rol->id;
						
						$item->save();
						$auth=Yii::app()->authManager;
						$nombre=P01Rol::model()->find("id=".$item->P01_id);
						$auth->assign($nombre->nombre,$model->Usuario);
					}
				}
			
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		
		$items = T08UsuarioHasRol::model()->findAllByAttributes(array('M05_id'=>$id));
		
		foreach($items as $item)
		$item->delete();
		
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('M05Usuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new M05Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['M05Usuario']))
			$model->attributes=$_GET['M05Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return M05Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=M05Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param M05Usuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='m05-usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
