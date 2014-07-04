<?php

/**
 * This is the model class for table "t09_noticias".
 *
 * The followings are the available columns in table 't09_noticias':
 * @property integer $id
 * @property string $Descripcion
 * @property string $Fecha
 * @property string $Titulo
 * @property integer $M05_id
 * @property string $Imagen
 *
 * The followings are the available model relations:
 * @property M05Usuario $m05
 */
class T09Noticias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return T09Noticias the static model class
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
		return 't09_noticias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Fecha, Titulo, M05_id', 'required'),
			array('M05_id', 'numerical', 'integerOnly'=>true),
			array('Titulo, Imagen', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Descripcion, Fecha, Titulo, M05_id, Imagen', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(	//--------------------------------------------------------
		
			'm05' => array(self::BELONGS_TO, 'M05Usuario', 'M05_id'),
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
			'Titulo' => 'Titulo',
			'M05_id' => 'M05',
			'Imagen' => 'Imagen',
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
		$criteria->compare('Titulo',$this->Titulo,true);
		$criteria->compare('M05_id',$this->M05_id);
		$criteria->compare('Imagen',$this->Imagen,true);

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