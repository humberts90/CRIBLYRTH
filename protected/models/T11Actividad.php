<?php

/**
 * This is the model class for table "t11_actividad".
 *
 * The followings are the available columns in table 't11_actividad':
 * @property integer $id
 * @property integer $M04_Pasantia_id
 * @property string $Descripcion
 * @property string $Fecha_inicio
 * @property string $Fecha_Fin
 *
 * The followings are the available model relations:
 * @property M04Pasantia $m04Pasantia
 */
class T11Actividad extends CActiveRecord
{
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
			array('M04_Pasantia_id, Descripcion, Fecha_inicio, Fecha_Fin', 'required'),
			array('M04_Pasantia_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, M04_Pasantia_id, Descripcion, Fecha_inicio, Fecha_Fin', 'safe', 'on'=>'search'),
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
			'm04Pasantia' => array(self::BELONGS_TO, 'M04Pasantia', 'M04_Pasantia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'M04_Pasantia_id' => 'M04 Pasantia',
			'Descripcion' => 'Descripcion',
			'Fecha_inicio' => 'Fecha Inicio',
			'Fecha_Fin' => 'Fecha Fin',
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
		$criteria->compare('M04_Pasantia_id',$this->M04_Pasantia_id);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Fecha_inicio',$this->Fecha_inicio,true);
		$criteria->compare('Fecha_Fin',$this->Fecha_Fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return T11Actividad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
