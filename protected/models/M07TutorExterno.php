<?php

/**
 * This is the model class for table "m07_tutor_externo".
 *
 * The followings are the available columns in table 'm07_tutor_externo':
 * @property integer $id
 * @property string $Cedula
 * @property string $Apellido
 * @property string $Nombre
 * @property string $Telefono
 * @property string $Correo
 * @property string $Cargo_Empresa
 * @property string $Curriculum
 * @property string $Enlace
 *
 * The followings are the available model relations:
 * @property T02PasantiaHasUsuario[] $t02PasantiaHasUsuarios
 */
class M07TutorExterno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm07_tutor_externo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Apellido, Nombre, Telefono, Correo, Cargo_Empresa', 'required'),
			array('Cedula', 'length', 'max'=>12),
			array('Apellido, Nombre', 'length', 'max'=>45),
			array('Telefono', 'length', 'max'=>25),
			array('Correo, Cargo_Empresa, Curriculum, Enlace', 'length', 'max'=>255),
			array('Curriculum', 'file','types'=>'pdf', 'allowEmpty'=>true, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Cedula, Apellido, Nombre, Telefono, Correo, Cargo_Empresa, Curriculum, Enlace', 'safe', 'on'=>'search'),
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
			't02PasantiaHasUsuarios' => array(self::HAS_MANY, 'T02PasantiaHasUsuario', 'M07_id'),
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
			'Telefono' => 'Telefono',
			'Correo' => 'Correo',
			'Cargo_Empresa' => 'Cargo Empresa',
			'Curriculum' => 'Curriculum',
			'Enlace' => 'Enlace',
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
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('Cargo_Empresa',$this->Cargo_Empresa,true);
		$criteria->compare('Curriculum',$this->Curriculum,true);
		$criteria->compare('Enlace',$this->Enlace,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return M07TutorExterno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
