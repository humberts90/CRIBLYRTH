<?php

/**
 * This is the model class for table "t07_observacion_tesis".
 *
 * The followings are the available columns in table 't07_observacion_tesis':
 * @property integer $id
 * @property string $Descripcion
 * @property string $Fecha
 * @property integer $M03_id
 *
 * The followings are the available model relations:
 * @property M03Tesis $m03
 */
class T07ObservacionTesis extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return T07ObservacionTesis the static model class
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
		return 't07_observacion_tesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Fecha, M03_id', 'required'),
			array('M03_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Descripcion, Fecha, M03_id', 'safe', 'on'=>'search'),
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
			'm03' => array(self::BELONGS_TO, 'M03Tesis', 'M03_id'),
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
			'Fecha' => 'Fecha',
			'M03_id' => 'M03',
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
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('M03_id',$this->M03_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}