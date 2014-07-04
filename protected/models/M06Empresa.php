<?php

/**
 * This is the model class for table "m06_empresa".
 *
 * The followings are the available columns in table 'm06_empresa':
 * @property integer $id
 * @property string $RIF
 * @property integer $Status
 * @property string $Razon_Social
 * @property string $Direccion
 * @property string $Telefono_1
 * @property string $Telefono_2
 * @property string $Fax
 * @property string $Correo
 * @property string $Descripcion
 * @property string $Sitio_Web
 * @property integer $P04_id
 * @property integer $P08_id
 * @property integer $P05_id
 * @property integer $P06_id
 * @property integer $P07_id
 *
 * The followings are the available model relations:
 * @property M03Tesis[] $m03Tesises
 * @property M04Pasantia[] $m04Pasantias
 * @property P04Parroquia $p04
 * @property P08Categoria $p08
 * @property P05Municipio $p05
 * @property P06Estado $p06
 * @property P07Pais $p07
 */
class M06Empresa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return M06Empresa the static model class
	 */
	public $temp;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm06_empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RIF, Razon_Social, Direccion, Telefono_1, Correo, Descripcion, P06_id, P07_id', 'required'),
			array('Status, P04_id, P08_id, P05_id, P06_id, P07_id', 'numerical', 'integerOnly'=>true),
			array('RIF, Telefono_1, Telefono_2, Fax', 'length', 'max'=>25),
			array('Razon_Social, Correo, Sitio_Web', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, RIF, Status, Razon_Social, Direccion, Telefono_1, Telefono_2, Fax, Correo, Descripcion, Sitio_Web, P04_id, P08_id, P05_id, P06_id, P07_id', 'safe', 'on'=>'search'),
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
			'm03Tesises' => array(self::HAS_MANY, 'M03Tesis', 'M06_id'),
			'm04Pasantias' => array(self::HAS_MANY, 'M04Pasantia', 'M06_id'),
			'p04' => array(self::BELONGS_TO, 'P04Parroquia', 'P04_id'),
			'p08' => array(self::BELONGS_TO, 'P08Categoria', 'P08_id'),
			'p05' => array(self::BELONGS_TO, 'P05Municipio', 'P05_id'),
			'p06' => array(self::BELONGS_TO, 'P06Estado', 'P06_id'),
			'p07' => array(self::BELONGS_TO, 'P07Pais', 'P07_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'RIF' => 'Rif',
			'Status' => 'Status',
			'Razon_Social' => 'Razon Social',
			'Direccion' => 'Direccion',
			'Telefono_1' => 'Telefono 1',
			'Telefono_2' => 'Telefono 2',
			'Fax' => 'Fax',
			'Correo' => 'Correo',
			'Descripcion' => 'Descripcion',
			'Sitio_Web' => 'Sitio Web',
			'P04_id' => 'P04',
			'P08_id' => 'P08',
			'P05_id' => 'P05',
			'P06_id' => 'P06',
			'P07_id' => 'P07',
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
		$criteria->compare('RIF',$this->RIF,true);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('Razon_Social',$this->Razon_Social,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono_1',$this->Telefono_1,true);
		$criteria->compare('Telefono_2',$this->Telefono_2,true);
		$criteria->compare('Fax',$this->Fax,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Sitio_Web',$this->Sitio_Web,true);
		$criteria->compare('P04_id',$this->P04_id);
		$criteria->compare('P08_id',$this->P08_id);
		$criteria->compare('P05_id',$this->P05_id);
		$criteria->compare('P06_id',$this->P06_id);
		$criteria->compare('P07_id',$this->P07_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	//--------------------------------------------------------------
	public function behaviors()
	{
	    return array(
	        // Classname => path to Class
	        'ActiveRecordLogableBehavior'=>
	            'application.behaviors.ActiveRecordLogableBehavior',
	    );
	}
}