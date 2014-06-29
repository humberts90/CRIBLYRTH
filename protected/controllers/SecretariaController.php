<?php
class SecretariaController extends Controller {
	
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
					'roles'=>array('Secretaria'),
					'users'=>array('@'),
				),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		
		);
	}

	public function actionIndex(){  // esta paja es para que haga pull
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('index',array('Usuario'=>$tar,));
	}


	public function actionEvaluatesis(){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$modelStatus = P03Status::model()->find("Descripcion = 'Aprobada'");
		$criteria=new CDbCriteria;		
		$criteria->condition='P03_id= '.$modelStatus->id;
		$dataProvider= new CActiveDataProvider(M03Tesis::model(), array('criteria'=>$criteria,));
		$this->render('test',array('Usuario'=>$tar,'dataProvider'=>$dataProvider));
	}

	public function actionActaevatesis($idEntrante){
		list($id,$id_alum) = explode("-", $idEntrante);
		$dir = T01TesisHasUsuario::model()->findAll("M03_id =".$id);
		$tr_j1 = P02TipoRelacion::model()->find("descripcion = 'Jurado 1'");
		$tr_j2 = P02TipoRelacion::model()->find("descripcion = 'Jurado 2'");
		$tr_js = P02TipoRelacion::model()->find("descripcion = 'Jurado Suplente'");
		$tr_ta = P02TipoRelacion::model()->find("descripcion = 'Tutor'");
		$tr_a = P02TipoRelacion::model()->find("descripcion = 'Tesista'");
		$tesis = M03Tesis::model()->find("id = ".$id);
		foreach ($dir as $value) {
			if ($value->P02_id == $tr_a->id && $value->M05_id==$id_alum) {
				$alumno = M05Usuario::model()->find("id =".$value->M05_id);	
				echo "Jurado 1: ".$alumno->Nombre."<br />";
			} elseif($value->P02_id == $tr_j1->id){
				$jurado1=M05Usuario::model()->find("id =".$value->M05_id);
				echo "Jurado 1: ".$jurado1->Nombre."<br />";
			} elseif ($value->P02_id == $tr_j2->id) {
				$jurado2 = M05Usuario::model()->find("id =".$value->M05_id);
				echo "Jurado 2: ".$jurado2->Nombre."<br />";
			} elseif ($value->P02_id == $tr_js->id) {
				$juradoS = M05Usuario::model()->find("id =".$value->M05_id);
				echo "Jurado Suplente: ".$juradoS->Nombre."<br />";
			} elseif ($value->P02_id == $tr_ta->id) {
				$tutor = M05Usuario::model()->find("id =".$value->M05_id);
				echo "tutor: ".$tutor->Nombre."<br />";
			} 

		}
		// convertir a pdf

		$mPDF1 = Yii::app()->ePdf->mpdf('utf-8','Letter-L','','',12,12,10,10,9,9,'L'); 
		//Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
		$mPDF1->useOnlyCoreFonts = true;
		$mPDF1->SetTitle("Acta Evaluacion ".$alumno->Nombre." ".$alumno->Apellido);
		$mPDF1->SetAuthor("Departamento Ing. Informatica");

		$mPDF1->showWatermarkText = true;
		$mPDF1->watermark_font = 'DejaVuSansCondensed';
		$mPDF1->watermarkTextAlpha = 0.1;
		$mPDF1->SetDisplayMode('fullpage');
		// tiene que tener 5 o 6 variables 
		 echo "entro 1";
		$mPDF1->WriteHTML($this->renderPartial('actasEva_Tesis',array(
			'Nombre_alumno'=>$alumno->Nombre." ".$alumno->Apellido,
			'Cedula_alumno' =>$alumno->Cedula,
			'Titulo_TAP' => $tesis->Titulo,
			'Fecha_presentacion' => $tesis->Fecha_Defensa,
			'L_academico' => $tesis->Lapso_Academico_defensa,
			'Nombre_tutor'=>$tutor->Nombre." ".$tutor->Apellido,
			'Nombre_Jurado_1'=>$jurado1->Nombre." ".$jurado1->Apellido,
			'Nombre_Jurado_2'=>$jurado2->Nombre." ".$jurado2->Apellido,
			'Nombre_Jurado_S'=>$juradoS->Nombre." ".$juradoS->Apellido,
			), true));
		$mPDF1->Output("Acta Evaluacion ".$alumno->Nombre." ".$alumno->Apellido,'D');  //Nombre del pdf y parÃ¡metro para ver pdf o descargarlo directamente.
		exit;

	}
	public function actionEvaluapasantia(){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$modelStatus = P03Status::model()->find("Descripcion = 'Aprobada'");
		$criteria=new CDbCriteria;		
		$criteria->condition='P03_id= '.$modelStatus->id;
		$dataProvider= new CActiveDataProvider(M04Pasantia::model(), array('criteria'=>$criteria,));
		$this->render('pasant',array('Usuario'=>$tar,'dataProvider'=>$dataProvider));
	}

	public function actionEvapasantia($id){
	
		$dir = T02PasantiaHasUsuario::model()->findAll("M04_id =".$id);
		$dir1 = T02PasantiaHasUsuario::model()->find("M04_id =".$id);
		$tr_j1 = P02TipoRelacion::model()->find("descripcion = 'Jurado 1'");
		$tr_j2 = P02TipoRelacion::model()->find("descripcion = 'Jurado 2'");
		$tr_js = P02TipoRelacion::model()->find("descripcion = 'Jurado Suplente'");
		$tr_ta = P02TipoRelacion::model()->find("descripcion = 'Tutor'");
		$tr_a = P02TipoRelacion::model()->find("descripcion = 'Pasante'");
		$pasantia = M04Pasantia::model()->find("id = ".$id);
		$empresa = M06Empresa::model()->find("id = ".$pasantia->M06_id);
		$TutorExt = M07TutorExterno::model()->findByPk($dir1->M07_id);
		foreach ($dir as $value) {
			if ($value->P02_id == $tr_a->id) {
			$alumno = M05Usuario::model()->find("id =".$value->M05_id);	
			echo "Jurado 1: ".$alumno->Nombre."<br />";
			} elseif($value->P02_id == $tr_j1->id){
			$jurado1=M05Usuario::model()->find("id =".$value->M05_id);
			echo "Jurado 1: ".$jurado1->Nombre."<br />";
			} elseif ($value->P02_id == $tr_j2->id) {
			$jurado2 = M05Usuario::model()->find("id =".$value->M05_id);
			echo "Jurado 2: ".$jurado2->Nombre."<br />";
			} elseif ($value->P02_id == $tr_js->id) {
			$juradoS = M05Usuario::model()->find("id =".$value->M05_id);
			echo "Jurado Suplente: ".$juradoS->Nombre."<br />";
			} elseif ($value->P02_id == $tr_ta->id) {
			$tutor = M05Usuario::model()->find("id =".$value->M05_id);
			echo "tutor: ".$tutor->Nombre."<br />";
			} 
		}
		// convertir a pdf
		$mPDF1 = Yii::app()->ePdf->mpdf('utf-8','Letter-L','','',12,12,10,10,9,9,'L'); 
		//Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
		$mPDF1->useOnlyCoreFonts = true;
		$mPDF1->SetTitle("Acta Evaluacion ".$alumno->Nombre." ".$alumno->Apellido);
		$mPDF1->SetAuthor("Departamento Ing. Informatica");
		$mPDF1->showWatermarkText = true;
		$mPDF1->watermark_font = 'DejaVuSansCondensed';
		$mPDF1->watermarkTextAlpha = 0.1;
		$mPDF1->SetDisplayMode('fullpage');
		// tiene que tener 5 o 6 variables 
		echo "entro 1";
		$mPDF1->WriteHTML($this->renderPartial('actasEva_Pasantia',array(
		'Nombre_alumno'=>$alumno->Nombre." ".$alumno->Apellido,
		'Cedula_alumno' =>$alumno->Cedula,
		'Titulo_TAP' => $pasantia->Titulo,
		'Nombre_empresa' => $empresa->Razon_Social,
		'Nombre_TutorE' => $TutorExt->Nombre." ".$TutorExt->Apellido,
		'Fecha_presentacion' => $pasantia->Fecha_Defensa,
		'L_academico' => $pasantia->Lapso_Academico_defensa,
		'Nombre_tutor'=>$tutor->Nombre." ".$tutor->Apellido,
		'Nombre_Jurado_1'=>$jurado1->Nombre." ".$jurado1->Apellido,
		'Nombre_Jurado_2'=>$jurado2->Nombre." ".$jurado2->Apellido,
		'Nombre_Jurado_S'=>$juradoS->Nombre." ".$juradoS->Apellido,
		), true));
		$mPDF1->Output("Acta Evaluacion ".$alumno->Nombre." ".$alumno->Apellido,'D');  //Nombre del pdf y parÃ¡metro para ver pdf o descargarlo directamente.
		exit;
	}
	
	public function Actionviejas_tap()
	{
		
		if(isset($_POST['desi'])){
			if($_POST["tip"]==1){
				$this->redirect(array('viejas_tap_subirt'));
			}
			else{
				$this->redirect(array('viejas_tap_subirp'));
			}
		}
		$this->render('viejas_tap');
	}	
	
	public function actionviejas_tap_subirt()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		
		$tipo1=P02TipoRelacion::model()->find("Descripcion = 'Tesista'");
		$tipo2=P02TipoRelacion::model()->find("Descripcion = 'Tutor'");
		$estado=P03Status::model()->find("Descripcion = 'Aprobada'");
		
		$model_1=new M03Tesis;
		$model_2=new T01TesisHasUsuario;
		$model_3=new T01TesisHasUsuario;
		$model_4=new M05Usuario;


		if(isset($_POST['M03Tesis']))
		{
			$model_1->attributes=$_POST['M03Tesis'];
			$model_1->P03_id=$estado->id;

			
			
			$model_4->attributes=$_POST['M05Usuario']; 
			
			$est2=M05Usuario::model()->find("Cedula = '".$model_4->Cedula."'");				
			
			if(count($est2)==0)
			{
				$model_4->Usuario=$model_4->Nombre.".".$model_4->Apellido; 
				$contrasena=$this->RandomString(); 
				$model_4->Telefono="no especifico";
				$model_4->Direccion="no especifico"; 
				
				$contenido="Buen día, has sido registraddo en el sistema TAP del departamento de Ing Informática. Usuario: ".$model_4->Usuario." Contraseña: ".$contrasena."";
				$this->correo_e($model_4->Correo_Electronico,$contenido,"nuevo usuario del sistema tap"); 
			
				$model_4->Clave=$model_4->hashPassword($contrasena,$session=$model_4->generateSalt()); 
				$model_4->session=$session;
				
				
				 if($model_4->save()) 
				 { 
					 $item = new T08UsuarioHasRol; 
					 $item->M05_id=$model_4->id; 
					 $item->P01_id="4"; $item->save(); 
					 $modelRol = P01Rol::model()->findByPk($item->P01_id); 
					 $auth=Yii::app()->authManager; 
					 $nombre=P01Rol::model()->find("id=".$item->P01_id); 
					 //$auth->assign($modelRol->nombre,$model_4->Usuario); 
				}			
			}			
			
				
			if($model_1->save())
			{		
				// Para subir la relacion con el alumno---------
				
				$model_2->M03_id=$model_1->id;
				$model_2->M05_id=$est2->id; // aqui es donde acomodo el usuario
				$model_2->P02_id=$tipo1->id;
		
				$model_2->save();

				// Para subir la relacion con el profesor
				$prof=M01Profesor::model()->findByPk($_POST['M03Tesis']['tutor']);
				$docente=M05Usuario::model()->find("Cedula = '".$prof->Cedula."'");	

				if(count($docente)==0)
				{ //si el profesor no se encuentra en el sistema se crea un usuario temporal no puede entrar en el sistema hasta que no se le habilite un Usuario y clave
						
					//Crea usuario temporal
					$sql="Insert into m05_usuario (id,Cedula,Apellido,Nombre,Correo_Electronico) values (NULL,'".$prof->Cedula."','" .$prof->Nombre."','".$prof->Apellido."','".$prof->Correo_UNET."')";
					$comando = Yii::app() -> db -> createCommand($sql);
					$comando -> execute(); 
					$docente2=M05Usuario::model()->find("Cedula = '".$prof->Cedula."'");	
					
					// asociar profesor a tesis
					$model_3->M03_id=$model_1->id;
					$model_3->M05_id=$docente2->id;
					$model_3->P02_id=$tipo2->id;
					
					$model_3->save();
				}
				else{ // si el profesor esta en el sistema 
					
					$model_3->M03_id=$model_1->id;
					$model_3->M05_id=$docente->id;
					$model_3->P02_id=$tipo2->id;
					
					$model_3->save();		
				}		
			}		
		}
		$this->render('viejas_tap_subirt',array('Usuario'=>$tar,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4));
	}	

//////////////////------------------------- Parte de LEYRY :) ---------------////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	
	public  function Actionviejas_tap_subirp(){

		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'"); // aqui debo traerme es el usuario con la cedula que estoy pidiendo en la vista
		$tipo1=P02TipoRelacion::model()->find("Descripcion = 'Pasante'");
		$estado=P03Status::model()->find("Descripcion = 'Aprobada'"); 
		$status=P08Categoria::model()->find("Descripcion = 'Aceptada'"); 
		$model_1=new M06Empresa;
		$model_2=new M04Pasantia;
		$model_3=new M05Usuario;
		$model_4=new M07TutorExterno;
		$model_5=new T02PasantiaHasUsuario;		
		if(isset($_POST['M04Pasantia']))
		{	
			//--------------------------Usuario-----------------------------------------

			$model_3->attributes=$_POST['M05Usuario'];
			$model_3->Usuario=$model_3->Nombre.".".$model_3->Apellido;
			$contrasena=$this->RandomString();
			$contenido="<p> Buen día, has sido registraddo en el sistema TAP del departamento de Ing Informática. Usuario: ".$model_3->Usuario." Contraseña: ".$contrasena."</p>";
			$this->correo_e($model_3->Correo_Electronico,$contenido,"nuevo usuario del sistema tap");
			$model_3->Direccion="no especifico";
			$model_3->Telefono="no especifico";
			$model_3->Clave=$model_3->hashPassword($contrasena,$session=$model_3->generateSalt());
			$model_3->session=$session;
			
			if($model_3->save())
			{
				
				$item = new T08UsuarioHasRol;
				$item->M05_id=$model_3->id;
				$item->P01_id="4";
				$item->save();
				
				$modelRol = P01Rol::model()->findByPk($item->P01_id);
				
				$auth=Yii::app()->authManager;
				$nombre=P01Rol::model()->find("id=".$item->P01_id);
				$auth->assign($modelRol->nombre,$model_3->Usuario);
			}
			
			
			
			//--------------------------Empresa-----------------------------------------

			$model_2->attributes=$_POST['M04Pasantia']; // datos de las pasantias 

			if($model_2->M06_id==null){ // si no selecciono empresa es por que va cargar una nueva

				$model_1->attributes=$_POST['M06Empresa'];
					
				if($model_1->validate()){	
					$model_1->Status='1';
					$model_1->P08_id=$status->id;
					$model_1->save(); //Guardo en la tabla Empresa
					
					$model_2->M06_id=$model_1->id;// Guarda la nueva empresa y se asocia el id de esta
				}				
			}
			
			
			//--------------------------Tutor Externo---------------------------------------
			$model_4->attributes=$_POST['M07TutorExterno']; //Datos del tutor externo
			$model_4->save();
			
			
			//---------------------------Pasantias--------------
			$model_2->P03_id=$estado->id;
			$model_2->save();
				
			
			//---------------------------Pasantias has Usuario---------------------------------
			$model_5->M04_id=$model_2->id;
			$model_5->M05_id=$model_3->id;
			$model_5->P02_id=$tipo1->id;			
			$model_5->M07_id=$model_4->id;
			$model_5->save();

			$this->redirect(array('index'));
		}
		$this->render('viejas_tap_subirp',array('Usuario'=>$tar,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,));

	}
	
	function RandomString($length=10,$uc=TRUE,$n=TRUE,$sc=FALSE)
        {
                $source = 'abcdefghijklmnopqrstuvwxyz';
                if($uc==1) $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                if($n==1) $source .= '1234567890';
                if($sc==1) $source .= '|@#~$%()=^*+[]{}-_';
                if($length>0){
                        $rstr = "";
                        $source = str_split($source,1);
                        for($i=1; $i<=$length; $i++){
                                mt_srand((double)microtime() * 1000000);
                                $num = mt_rand(1,count($source));
                                $rstr .= $source[$num-1];
                        }
       
                }
                return $rstr;
        }
	
	public function actionCorreo(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M05Usuario;
		if(isset($_POST['M05Usuario'])){
			$model->attributes=$_POST['M05Usuario'];
			$this->correo_e($model->Correo_Electronico,$model->Nombre,$model->Apellido);

		}

		$this->render('correo',array('Usuario'=>$tar,'model'=>$model));
	}

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
}