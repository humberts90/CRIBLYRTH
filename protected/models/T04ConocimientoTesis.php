<?php

/**
 * This is the model class for table "t04_conocimiento_tesis".
 *
 * The followings are the available columns in table 't04_conocimiento_tesis':
 * @property integer $P11_id
 * @property integer $M03_id
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property P11Conocimientos $p11
 * @property M03Tesis $m03
 */
class T04ConocimientoTesis extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return T04ConocimientoTesis the static model class
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
		return 't04_conocimiento_tesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P11_id, M03_id', 'required'),
			array('P11_id, M03_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('P11_id, M03_id, id', 'safe', 'on'=>'search'),
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
			'm03' => array(self::BELONGS_TO, 'M03Tesis', 'M03_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'P11_id' => 'P11',
			'M03_id' => 'M03',
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
		$criteria->compare('M03_id',$this->M03_id);
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