<?php

/**
 * This is the model class for table "t05_conocimiento_pasantias".
 *
 * The followings are the available columns in table 't05_conocimiento_pasantias':
 * @property integer $P11_id
 * @property integer $M04_id
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property P11Conocimientos $p11
 * @property M04Pasantia $m04
 */
class T05ConocimientoPasantias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return T05ConocimientoPasantias the static model class
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
		return 't05_conocimiento_pasantias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P11_id, M04_id', 'required'),
			array('P11_id, M04_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('P11_id, M04_id, id', 'safe', 'on'=>'search'),
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
			'p11' => array(self::BELONGS_TO, 'P11Conocimientos', 'P11_id'),
			'm04' => array(self::BELONGS_TO, 'M04Pasantia', 'M04_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'P11_id' => 'P11',
			'M04_id' => 'M04',
			'id' => 'ID',
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

		$criteria->compare('P11_id',$this->P11_id);
		$criteria->compare('M04_id',$this->M04_id);
		$criteria->compare('id',$this->id);

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