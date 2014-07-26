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
	public function actionDetalle($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=M01Profesor::model()->findByPk($id);
		
		$this->render('deta',array('model'=>$model,'Usuario'=>$tar));
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
		$criteria->condition='P02_id = 7';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(T02PasantiaHasUsuario::model(), array('criteria'=>$criteria,));

	  	$this->render('pasantias',array(
        'dataProvider'=>$dataProvider,
       // 'model'=>$model,
        'Usuario'=>$tar,
        )); 
	}
	
	//----------------------------------------------------------------------------------------------------
	
	public function actionHistTesisProfesor(){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		$model=new M01Profesor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['M01Profesor']))
			$model->attributes=$_POST['M01Profesor'];

	  	$this->render('hist_tesis_profesor',array(
        'dataProvider'=>$model->search(),
        'model'=>$model,
        'Usuario'=>$tar,
		));
		
	}
	public function actionDetalleHistTesisProfesor($id){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$busqueda=M01Profesor::model()->findByPk($id); //TODAS Tesis profesor 
		$us=M05Usuario::model()->find("Cedula=".$busqueda->Cedula);
		
		$consulta="SELECT A.Titulo as Titulo,A.id as ID,A.P03_id AS P03, A.Fecha_Defensa as FD,B.P02_id AS P02 
					from m03_tesis as A, t01_tesis_has_usuario as B 
					WHERE A.id = B.M03_id AND B.P02_id = 2 AND A.P03_id = 7 AND B.M05_id=".$us->id."    
					ORDER BY A.Fecha_Defensa DESC";
			$rawData = Yii::app()->db->createCommand($consulta); //or use ->queryAll(); in CArrayDataProvider
			$count = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $consulta . ') as count_alias')->queryScalar();

			 $dataProvider = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'ID',   
                    'totalItemCount'=>$count,       
 
 
                    'sort' => array(
                        'attributes' => array(
                            'Titulo', 'FD',
                        ),
                        'defaultOrder' => array(
                            'ID' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 3,
                    ),
                ));
		
			$this->render('detalle_htp',array('Usuario'=>$tar,'dataProvider'=>$dataProvider, 'us'=>$us));
		
	}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------

public function actionHistPasantiaProfesor(){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

		$model=new M01Profesor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['M01Profesor']))
			$model->attributes=$_POST['M01Profesor'];

	  	$this->render('hist_pasantias_profesor',array(
        'dataProvider'=>$model->search(),
        'model'=>$model,
        'Usuario'=>$tar,
		));
		
	}
	public function actionDetalleHistPasantiasProfesor($id){
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$busqueda=M01Profesor::model()->findByPk($id); //TODAS Tesis profesor 
		$us=M05Usuario::model()->find("Cedula=".$busqueda->Cedula);
		
		$consulta="SELECT A.Titulo as Titulo,A.id as ID,A.P03_id AS P03, A.Fecha_Defensa as FD,B.P02_id AS P02 
					from m04_pasantia as A, t02_pasantia_has_usuario as B 
					WHERE A.id = B.M04_id AND B.P02_id = 2 AND A.P03_id = 7 AND B.M05_id=".$us->id."    
					ORDER BY A.Fecha_Defensa DESC";
			$rawData = Yii::app()->db->createCommand($consulta); //or use ->queryAll(); in CArrayDataProvider
			$count = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $consulta . ') as count_alias')->queryScalar();

			 $dataProvider = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'ID',   
                    'totalItemCount'=>$count,       
 
 
                    'sort' => array(
                        'attributes' => array(
                            'Titulo', 'FD',
                        ),
                        'defaultOrder' => array(
                            'ID' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 3,
                    ),
                ));
		
			$this->render('detalle_htp',array('Usuario'=>$tar,'dataProvider'=>$dataProvider, 'us'=>$us));
		
	}

}

?>