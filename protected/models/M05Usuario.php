<?php

/**
 * This is the model class for table "m05_usuario".
 *
 * The followings are the available columns in table 'm05_usuario':
 * @property integer $id
 * @property string $Cedula
 * @property string $Apellido
 * @property string $Nombre
 * @property string $Usuario
 * @property string $Clave
 * @property string $Telefono
 * @property string $Correo_Electronico
 * @property string $Direccion
 * @property integer $Unidades_Credito_Aprobadas
 * @property integer $Servicio_Comunitario
 * @property string $Ultimo_Lapso_Academico
 * @property string $foto
 * @property string $session
 *
 * The followings are the available model relations:
 * @property T01TesisHasUsuario[] $t01TesisHasUsuarios
 * @property T02PasantiaHasUsuario[] $t02PasantiaHasUsuarios
 * @property T03Acta[] $t03Actas
 * @property T08UsuarioHasRol[] $t08UsuarioHasRols
 */
class M05Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $sta;
	public function tableName()
	{
		return 'm05_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Apellido, Nombre, Usuario, Clave, Telefono, Correo_Electronico, Direccion', 'required'),
			array('Unidades_Credito_Aprobadas, Servicio_Comunitario', 'numerical', 'integerOnly'=>true),
			array('Cedula', 'length', 'max'=>12),
			array('Apellido, Nombre, Usuario, Clave, Telefono', 'length', 'max'=>45),
			array('Correo_Electronico, foto, session', 'length', 'max'=>255),
			array('Ultimo_Lapso_Academico', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Cedula, Apellido, Nombre, Usuario, Clave, Telefono, Correo_Electronico, Direccion, Unidades_Credito_Aprobadas, Servicio_Comunitario, Ultimo_Lapso_Academico, foto, session', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			't01TesisHasUsuarios' => array(self::HAS_MANY, 'T01TesisHasUsuario', 'M05_id'),
			't02PasantiaHasUsuarios' => array(self::HAS_MANY, 'T02PasantiaHasUsuario', 'M05_id'),
			't03Actas' => array(self::HAS_MANY, 'T03Acta', 'M05_id'),
			't08UsuarioHasRols' => array(self::HAS_MANY, 'T08UsuarioHasRol', 'M05_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Cedula' => 'Cedula',
			'Apellido' => 'Apellido',
			'Nombre' => 'Nombre',
			'Usuario' => 'Usuario',
			'Clave' => 'Clave',
			'Telefono' => 'Telefono',
			'Correo_Electronico' => 'Correo Electronico',
			'Direccion' => 'Direccion',
			'Unidades_Credito_Aprobadas' => 'Unidades Credito Aprobadas',
			'Servicio_Comunitario' => 'Servicio Comunitario',
			'Ultimo_Lapso_Academico' => 'Ultimo Lapso Academico',
			'foto' => 'Foto',
			'session' => 'Session',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Usuario',$this->Usuario,true);
		$criteria->compare('Clave',$this->Clave,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Correo_Electronico',$this->Correo_Electronico,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Unidades_Credito_Aprobadas',$this->Unidades_Credito_Aprobadas);
		$criteria->compare('Servicio_Comunitario',$this->Servicio_Comunitario);
		$criteria->compare('Ultimo_Lapso_Academico',$this->Ultimo_Lapso_Academico,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('session',$this->session,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return M05Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->session)==$this->Clave;
	}
	
	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return sha1($salt.$password);
		#return $password;
	}
	
	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	public function generateSalt()
	{
		return uniqid('',true);
	}
	public function behaviors()
	{
	    return array(
	        // Classname => path to Class
	        'ActiveRecordLogableBehavior'=>
	            'application.behaviors.ActiveRecordLogableBehavior',
	    );
	}
}
