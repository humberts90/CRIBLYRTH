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
	//----------------Reporte de Tesis Finalizadas-------------------------------------------

	public function actionTesisFin(){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$criteria=new CDbCriteria;	
		$criteria->condition='P03_id = 7';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(M03Tesis::model(), array('criteria'=>$criteria,));
	
	  	$this->render('tesisfin',array(
        'dataProvider'=>$dataProvider,
       // 'model'=>$model,
        'Usuario'=>$tar,
        )); 


	}
	//------------------------------------------------------------------------------------------
	public function actionPasantias(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new M04Pasantia();
		$criteria=new CDbCriteria;
		$criteria->condition='P03_id= 2';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(M04Pasantia::model(), array('criteria'=>$criteria,));

		$this->render('list_2',array(
			'Usuario'=>$tar,
			 'dataProvider'=>$dataProvider,
			 'model'=>$model,
			));
	}
	public function actionPasdeta($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M04Pasantia::model()->findByPk($id);
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$tesis->id);
		$this->render('test_2',array(
			'Usuario'=>$tar,
			'model'=>$tesis,
			'has1'=>$has1,
			));
	}
	public function actionCronograma($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$cronos=M02Cronograma::model()->findAll("m04_pasantia_id = '".$id."'");
		$this->render('cronogramas',array('Usuario'=>$tar,'cronos'=>$cronos,));
	}
	public function actionCrono($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$psa=M02Cronograma::model()->findByPk($id);
		$datos=T11Actividad::model()->findAll("M02_id = ".$id);
		if(count($datos)>0){
			foreach ($datos as $value) {
				$data[] = array(
		  		'label' => $value->Descripcion,
		  		'start' => $value->Fecha_inicio, 
			     'end'   => $value->Fecha_Fin,
				);
			}
			$this->render('gantt',array(
			'data'=>$data,
			'proy'=>$psa,
			'Usuario'=>$tar,
			));
		}
		else{
			$this->redirect(array('cronograma','id'=>$psa->m04_pasantia_id));
		}	
		
	}
	//------------------------------------------------------------------------------------------
		public function actionTesis(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new M03Tesis();
		$criteria=new CDbCriteria;		
		$criteria->condition='P03_id= 2';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(M03Tesis::model(), array('criteria'=>$criteria,));

		$this->render('list_1',array(
			'Usuario'=>$tar,
			 'dataProvider'=>$dataProvider,
			 'model'=>$model,
			));
	}
		public function actionTesdeta($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M03Tesis::model()->findByPk($id);
		$has1=T01TesisHasUsuario::model()->findAll('M03_id = '.$tesis->id);
		$this->render('test',array(
			'Usuario'=>$tar,
			'model'=>$tesis,
			'has1'=>$has1,
			));
	}
	public function actionEvalua($id){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M03Tesis::model()->findByPk($id);
		$model=new T07ObservacionTesis;
		$tes=T01TesisHasUsuario::model()->findAll("M03_id =".$tesis->id);
		$conotes=T04ConocimientoTesis::model()->findAll("M03_id= ".$tesis->id);		
		$prof=T08Usuario_has_rol::model()->findAll("P01_id = 3");
		$tipo1=P02TipoRelacion::model()->find("Descripcion = 'Jurado 1'");
		$tipo2=P02TipoRelacion::model()->find("Descripcion = 'Jurado 2'");
		$tipo3=P02TipoRelacion::model()->find("Descripcion = 'Jurado Suplente'");
		$jura1=new T01TesisHasUsuario;
		$jura2=new T01TesisHasUsuario;
		$jura3=new T01TesisHasUsuario;

		

		if(isset($_POST['T07ObservacionTesis']))
		{
				$jurado1=$_REQUEST['j1'];
				$jurado2=$_REQUEST['j2'];
				$jurado3=$_REQUEST['j3'];
				$ju1=M01Profesor::model()->findByPk($jurado1);
				$ju2=M01Profesor::model()->findByPk($jurado2);
				$ju3=M01Profesor::model()->findByPk($jurado3);
			$model->attributes=$_POST['T07ObservacionTesis'];
			$temp=$_POST['T07ObservacionTesis']['M03_id'];
			$model->M03_id=$tesis->id;
			$model->Fecha=date('Y-m-d');

			
			if($model->save()){

				
			
				$jura1->M03_id=$id;
				$jura1->M05_id=$jurado1;
				$jura1->P02_id="4";
				$jura1->save();

				$jura2->M03_id=$id;
				$jura2->M05_id=$jurado2;
				$jura2->P02_id="5";
				$jura2->save();

				$jura3->M03_id=$id;
				$jura3->M05_id=$jurado3;
				$jura3->P02_id="6";
				$jura3->save(); 


				$tesis->P03_id=$temp;
				$tesis->Fecha_Aprobación=date('Y-m-d');

			

				if($tesis->save()){
				echo "<script>alert('Evaluacion realizada con exito');</script>";
				$this->redirect(array('tesis'));

				}

			

			
				
				
			}
			
				
		}

		$this->render('evalua',array(
			'Usuario'=>$tar,
			'tes'=>$tesis,
			'model'=>$model,
			'profesor'=>$prof,
			'conocimiento'=>$conotes,
			));
	}
	//----------------Reporte de Pasantías Finalizadas-------------------------------------------

	public function actionPasantiaFin(){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$criteria=new CDbCriteria;	
		$criteria->condition='P03_id = 7';
		$criteria->limit="10";
		$dataProvider= new CActiveDataProvider(M04Pasantia::model(), array('criteria'=>$criteria,));
	
	  	$this->render('pasantiafin',array(
        'dataProvider'=>$dataProvider,
       // 'model'=>$model,
        'Usuario'=>$tar,
        )); 


	}

	//------------------------Detalle profesor-------------------------------------------------

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
	//----------Historial tesis por profesor -------------------------------------------------------------------------------------
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

	//////////////////////////////////// Leyry y leo :3 besties foreva xD ////////////////////////////////////////////////////////////////////////
	public function actionEvaluaP($id){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'"); 	//Usuario que esta logueado
		$pasantia=M04Pasantia::model()->findByPk($id);								//plan de trabajo que se esta evaluando
		$model=new T10ObservacionPasantias; 
		$pas= new T02PasantiaHasUsuario; //Relacion: Pasantias, Usuario, tutor externo y tipo de relacion
		$conopas=T05ConocimientoPasantias::model()->findAll("M04_id= ".$pasantia->id); //Esto como que no esta funcionando: esta tabla no tiene datos aun...
		$prof=T08Usuario_has_rol::model()->findAll("P01_id = 3");
		$pas2=T02PasantiaHasUsuario::model()->find("M04_id = ".$pasantia->id);

		if(isset($_POST['T10ObservacionPasantias']))
		{
			
			
			$jurado1= $_REQUEST['j1'];
			$pas->M05_id=$jurado1;
			$pas->M04_id=$id;
			$pas->P02_id="3";
			$pas->M07_id=$pas2->M07_id;
			$pas->save();




			$model->attributes=$_POST['T10ObservacionPasantias'];
			$temp=$_POST['T10ObservacionPasantias']['M04_id'];
			$model->M04_id=$pasantia->id;
			$model->Fecha=date('Y-m-d');

			
			if($model->save()){
				
				$pasantia->P03_id=$temp;
				$pasantia->Fecha_Aprobacion=date('Y-m-d');
				
				if($pasantia->save()){
				echo "<script>alert('Evaluacion realizada con exito');</script>";
				$this->redirect(array('pasantias'));

				}
			}	
		}

		$this->render('evaluaP',array(
			'Usuario'=>$tar,
			'pas'=>$pasantia,
			'model'=>$model,
			'profesor'=>$prof,
			'conocimiento'=>$conopas,
			));
	}
	//--------------------Elaboracion de acta mediante plantilla-------------------------------------------

	public function actionContenido()
    {
        $q = $_POST['store'];
		
		
		$agent = T12Plantillas::model()->findByPK($q);
		
		 echo json_encode(array(
			'descripcion' => $agent->descripcion,
			'contenido' => $agent->contenido
			
			));
		Yii::app()->end();
		
		//$this->render('elaborar_acta',array('agent'=>$agent,));
        /*$sql = "SELECT * FROM t12_plantillas WHERE id_plantilla=$q";
        $command = Yii::app()->db->createCommand($sql);
        $result= $command->queryScalar(); 
        echo $result;*/
		
		

    }
	public function actionElaborar_acta(){
	
		//$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
	
			
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=T12Plantillas::model()->findAll();
		
		$this->render('elaborar_acta',array('Usuario'=>$tar,'model'=>$model));
	}


		public function actionCrearActa(){
	
		$acta= new T03ActaReunion;
		$tar=M05Usuario::model()->find("Usuario= '".Yii::app ()->user->name."'");

		$descrip='text';
		$contenidoA='contenido';	
		//echo $_POST['contenido'];

		$descrip= (string) $_POST['contenido'];
		//$contenidoA= (string) $_POST['contenido'];	
		//echo $_POST['contenido'];
		
		$acta->M05_id=$tar->id;
		$acta->Descripcion=$descrip;
		$acta->Fecha=date("Y-m-d");
	

		$acta->save();

	
		$tar2=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model2=T12Plantillas::model()->findAll();
		
		$this->render('elaborar_acta',array('Usuario'=>$tar2,'model'=>$model2));
			

	}

}

?>