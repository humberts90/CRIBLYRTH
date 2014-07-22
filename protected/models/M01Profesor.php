<?php

/**
 * This is the model class for table "m01_profesor".
 *
 * The followings are the available columns in table 'm01_profesor':
 * @property integer $id
 * @property string $Cedula
 * @property string $Apellido
 * @property string $Nombre
 * @property string $Correo_UNET
 *
 * The followings are the available model relations:
 * @property T06ConocimientoProfesor[] $t06ConocimientoProfesors
 */
class M01Profesor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return M01Profesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm01_profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Apellido, Nombre, Correo_UNET', 'required'),
			array('Cedula', 'length', 'max'=>12),
			array('Apellido, Nombre, Correo_UNET', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Cedula, Apellido, Nombre, Correo_UNET', 'safe', 'on'=>'search'),
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
			't06ConocimientoProfesors' => array(self::HAS_MANY, 'T06ConocimientoProfesor', 'M01_d'),
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
			'Correo_UNET' => 'Correo Unet',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('Apellido',$this->Apellido,true,' OR ');
		$criteria->compare('Apellido',$this->Nombre,true,' OR ');
		$criteria->compare('Nombre',$this->Nombre,true,' OR ');
		$criteria->compare('Nombre',$this->Apellido,true,' OR ');
		$criteria->compare('Correo_UNET',$this->Correo_UNET,true);
	

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	//----------------------------------------------------------------------------------------
	public function behaviors()
	{
	    return array(
	        // Classname => path to Class
	        'ActiveRecordLogableBehavior'=>
	            'application.behaviors.ActiveRecordLogableBehavior',
	    );
	}
}