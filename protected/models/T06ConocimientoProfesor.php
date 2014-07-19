<?php

/**
 * This is the model class for table "t06_conocimiento_profesor".
 *
 * The followings are the available columns in table 't06_conocimiento_profesor':
 * @property integer $id
 * @property integer $P11_id
 * @property integer $M01_d
 *
 * The followings are the available model relations:
 * @property P11Conocimientos $p11
 * @property M01Profesor $m01D
 */
class T06ConocimientoProfesor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return T06ConocimientoProfesor the static model class
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
		return 't06_conocimiento_profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P11_id, M01_d', 'required'),
			array('P11_id, M01_d', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, P11_id, M01_d', 'safe', 'on'=>'search'),
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
			'm01D' => array(self::BELONGS_TO, 'M01Profesor', 'M01_d'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'P11_id' => 'P11',
			'M01_d' => 'M01 D',
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
		$criteria->compare('P11_id',$this->P11_id);
		$criteria->compare('M01_d',$this->M01_d);

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