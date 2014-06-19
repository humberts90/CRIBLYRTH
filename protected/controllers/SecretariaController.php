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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'roles'=>array('Administrador'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'users'=>array('@'),
			),
		
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('index',array('Usuario'=>$tindexar,));
	}


	public function actionEvalua(){
		
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$modelStatus = P03Status::model()->find("Descripcion = 'Aprobada'");
		$criteria=new CDbCriteria;		
		$criteria->condition='P03_id= '.$modelStatus->id;
		$dataProvider= new CActiveDataProvider(M03Tesis::model(), array('criteria'=>$criteria,));
		$this->render('test',array('Usuario'=>$tar,'dataProvider'=>$dataProvider));
	}

	public function actionActaeva($id){
		$DosAlumnos = false;//
		$dir = T01TesisHasUsuario::model()->findAll("M03_id =".$id);
		$tr_j1 = P02TipoRelacion::model()->find("descripcion = 'Jurado 1'");
		$tr_j2 = P02TipoRelacion::model()->find("descripcion = 'Jurado 2'");
		$tr_js = P02TipoRelacion::model()->find("descripcion = 'Jurado Suplente'");
		$tr_ta = P02TipoRelacion::model()->find("descripcion = 'Tutor Academico'");
		$tr_a = P02TipoRelacion::model()->find("descripcion = 'Tesista'");
		$tesis = M03Tesis::model()->find("id = ".$id);
		//$jefe_2=T08UsuarioHasRol::model()->find("P01_id = ".$jefe_1->id);
		foreach ($dir as $value) {
			if ($value->P02_id == $tr_a->id) {
				if(!$DosAlumnos){				
					$alumno = M05Usuario::model()->find("id =".$value->M05_id);	
					$DosAlumnos = true;
				} else {
					$alumno2 = M05Usuario::model()->find("id =".$value->M05_id);
				}
			} elseif($value->P02_id == $tr_j1->id){
				$jurado1=M05Usuario::model()->find("id =".$value->M05_id);
			} elseif ($value->P02_id == $tr_j2->id) {
				$jurado2 = M05Usuario::model()->find("id =".$value->M05_id);
			} elseif ($value->P02_id == $tr_js->id) {
				$juradoS = M05Usuario::model()->find("id =".$value->M05_id);
			} elseif ($value->P02_id == $tr_ta->id) {
				$tutor = M05Usuario::model()->find("id =".$value->M05_id);
			} 
		}
			
			// convertir a pdf

		 $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); 
		 //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
		 $mPDF1->useOnlyCoreFonts = true;
		 $mPDF1->SetTitle(" Acta Evaluacion ".$alumno->Nombre." ".$alumno->Apellido);
		 $mPDF1->SetAuthor("Departamento Ing. Informatica");
		
		 $mPDF1->showWatermarkText = true;
		 $mPDF1->watermark_font = 'DejaVuSansCondensed';
		 $mPDF1->watermarkTextAlpha = 0.1;
		 $mPDF1->SetDisplayMode('fullpage');
		// tiene que tener 5 o 6 variables 
		$mPDF1->WriteHTML($this->renderPartial('actasEva_Tesis',array(
			'Normbre_alumno'=>$alumno->Nombre." ".$alumno->Apellido,
			'Cedula_alumno' =>$alumno->Cedula,
			'Titulo_TAP' => $tesis->Titulo,
			'Fecha_presentacion' => $tesis->Fecha_Defensa,
			'L_academico' => $tesis->Lapso_Academico_defensa,
			'Nombre_tutor'=>$tutor->Nombre." ".$tutor->Apellido,
			'Nombre_Jurado_1'=>$jurado1->Nombre." ".$jurado1->Apellido,
			'Nombre_Jurado_2'=>$jurado2->Nombre." ".$jurado2->Apellido,
			'Nombre_Jurado_S'=>$juradoS->Nombre." ".$juradoS->Apellido,
			), true));
		if($DosAlumnos){
				// convertir a pdf

			 $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); 
			 //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
			 $mPDF1->useOnlyCoreFonts = true;
			 $mPDF1->SetTitle(" Acta Evaluacion ".$alumno->Nombre." ".$alumno->Apellido);
			 $mPDF1->SetAuthor("Departamento Ing. Informatica");
			
			 $mPDF1->showWatermarkText = true;
			 $mPDF1->watermark_font = 'DejaVuSansCondensed';
			 $mPDF1->watermarkTextAlpha = 0.1;
			 $mPDF1->SetDisplayMode('fullpage');
			// tiene que tener 5 o 6 variables 
			$mPDF1->WriteHTML($this->renderPartial('actasEva_Tesis',array(
			'Normbre_alumno'=>$alumno2->Nombre." ".$alumno2->Apellido,
			'Cedula_alumno' =>$alumno->Cedula,
			'Titulo_TAP' => $tesis->Titulo,
			'Fecha_presentacion' => $tesis->Fecha_Defensa,
			'L_academico' => $tesis->Lapso_Academico_defensa,
			'Nombre_tutor'=>$tutor,
			'Nombre_Jurado_1'=>$jurado1,
			'Nombre_Jurado_2'=>$jurado2,
			'Nombre_Jurado_S'=>$juradoS,
				), true));

		}

	}
}