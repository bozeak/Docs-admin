<?php

/**
 * This is the model class for table "i_grad".
 *
 * The followings are the available columns in table 'i_grad':
 * @property integer $id
 * @property string $md
 *
 * The followings are the available model relations:
 * @property IResponsabil[] $iResponsabils
 */
class Grad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Grad the static model class
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
		return 'i_grad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('md', 'required'),
			array('md', 'length', 'max'=>18),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, md', 'safe', 'on'=>'search'),
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
			'iResponsabils' => array(self::HAS_MANY, 'Responsabil', 'grad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'md' => 'Md',
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
		$criteria->compare('md',$this->md,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}