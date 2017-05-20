<?php

/**
 * This is the model class for table "INVENTORY_MASTER".
 *
 * The followings are the available columns in table 'INVENTORY_MASTER':
 * @property string $ID
 * @property string $WHEELCHAIR
 * @property string $SCROLLER
 * @property string $USER_ID
 * @property string $USER_NAME
 * @property string $DATE_CREATED
 * @property string $DATE_MODIFIED
 */
class InventoryMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InventoryMaster the static model class
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
		return 'INVENTORY_MASTER';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('WHEELCHAIR, SCROLLER', 'required'),
			array('WHEELCHAIR', 'numerical', 'integerOnly'=>true),
			array('SCROLLER', 'numerical', 'integerOnly'=>true),
			array('WHEELCHAIR, SCROLLER, USER_ID', 'length', 'max'=>20),
			array('USER_NAME', 'length', 'max'=>300),
			array('DATE_CREATED, DATE_MODIFIED', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, WHEELCHAIR, SCROLLER, USER_ID, USER_NAME, DATE_CREATED, DATE_MODIFIED', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'WHEELCHAIR' => 'Wheelchair',
			'SCROLLER' => 'Scroller',
			'USER_ID' => 'User',
			'USER_NAME' => 'User Name',
			'DATE_CREATED' => 'Date Created',
			'DATE_MODIFIED' => 'Date Modified',
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

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('WHEELCHAIR',$this->WHEELCHAIR,true);
		$criteria->compare('SCROLLER',$this->SCROLLER,true);
		$criteria->compare('USER_ID',$this->USER_ID,true);
		$criteria->compare('USER_NAME',$this->USER_NAME,true);
		$criteria->compare('DATE_CREATED',$this->DATE_CREATED,true);
		$criteria->compare('DATE_MODIFIED',$this->DATE_MODIFIED,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}