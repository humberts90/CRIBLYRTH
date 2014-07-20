<?php

/**
 * This is the model class for table "t11_actividad".
 *
 * The followings are the available columns in table 't11_actividad':
 * @property integer $id
 * @property string $Descripcion
 * @property string $Fecha_inicio
 * @property string $Fecha_Fin
 * @property integer $M02_id
 *
 * The followings are the available model relations:
 * @property M02Cronograma $m02
 */
class T11Actividad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return T11Actividad the static model class
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
		return 't11_actividad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Fecha_inicio, Fecha_Fin, M02_id', 'required'),
			array('M02_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Descripcion, Fecha_inicio, Fecha_Fin, M02_id', 'safe', 'on'=>'search'),
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
			'm02' => array(self::BELONGS_TO, 'M02Cronograma', 'M02_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Descripcion' => 'Descripcion',
			'Fecha_inicio' => 'Fecha Inicio',
			'Fecha_Fin' => 'Fecha Fin',
			'M02_id' => 'M02',
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
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Fecha_inicio',$this->Fecha_inicio,true);
		$criteria->compare('Fecha_Fin',$this->Fecha_Fin,true);
		$criteria->compare('M02_id',$this->M02_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
		//--------------------------------------------------------
		public function behaviors()
	{
	    return array(
	        // Classname => path to Class
	        'ActiveRecordLogableBehavior'=>
	            'application.behaviors.ActiveRecordLogableBehavior',
	    );
	}
}