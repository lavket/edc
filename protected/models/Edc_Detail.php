<?php

/**
 * This is the model class for table "edc_detail".
 *
 * The followings are the available columns in table 'edc_detail':
 * @property integer $ID
 * @property integer $TID_NO
 * @property string $SERIAL_NO
 * @property string $LOCATION
 * @property string $ISAMEX
 * @property integer $AMEX_NO
 * @property string $SIM_CARD
 * @property string $TERMINAL_TYPE
 * @property string $VENDOR
 * @property string $COMPANY
 * @property string $STATUS
 * @property string $REMARKS
 * @property string $DATE_CREATED
 * @property string $DATE_MODIFIED
 */
class Edc_Detail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Edc_Detail the static model class
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
		return 'edc_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SERIAL_NO, LOCATION, DEPARTMENT, ISAMEX, TERMINAL_TYPE, VENDOR, COMPANY, STATUS,', 'required'),
			//array('AMEX_NO', 'numerical', 'integerOnly'=>true),
			array('TID_NO, HDFC_TID_NO, MID_NO, SERIAL_NO, AMEX_NO, VENDOR, STATUS', 'length', 'max'=>50),
			array('LOCATION, DEPARTMENT', 'length', 'max'=>100),
			array('ISAMEX', 'length', 'max'=>10),
			array('SIM_CARD, TERMINAL_TYPE, COMPANY', 'length', 'max'=>20),
			array('REMARKS', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('TID_NO, SERIAL_NO, LOCATION, DEPARTMENT, ISAMEX, AMEX_NO, SIM_CARD, TERMINAL_TYPE, VENDOR, COMPANY, STATUS, REMARKS', 'safe', 'on'=>'search'),
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
			'TID_NO' => 'ICICI TID No',
			'HDFC_TID_NO' => 'HDFC TID No',
			'MID_NO' => 'MID No',
			'SERIAL_NO' => 'Serial No',
			'LOCATION' => 'Location',
			'DEPARTMENT' => 'Department',
			'ISAMEX' => 'Is Amex',
			'AMEX_NO' => 'Amex No',
			'SIM_CARD' => 'Sim Card',
			'TERMINAL_TYPE' => 'Terminal Type',
			'VENDOR' => 'Vendor',
			'COMPANY' => 'Company',
			'STATUS' => 'Terminal Status',
			'REMARKS' => 'Remarks',
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

		//$criteria->compare('ID',$this->ID);
		$criteria->compare('TID_NO',$this->TID_NO);
		$criteria->compare('HDFC_TID_NO',$this->HDFC_TID_NO);
		$criteria->compare('MID_NO',$this->MID_NO);
		$criteria->compare('SERIAL_NO',$this->SERIAL_NO,true);
		$criteria->compare('LOCATION',$this->LOCATION,true);
		$criteria->compare('DEPARTMENT',$this->DEPARTMENT,true);
		$criteria->compare('ISAMEX',$this->ISAMEX,true);
		$criteria->compare('AMEX_NO',$this->AMEX_NO);
		$criteria->compare('SIM_CARD',$this->SIM_CARD,true);
		$criteria->compare('TERMINAL_TYPE',$this->TERMINAL_TYPE,true);
		$criteria->compare('VENDOR',$this->VENDOR,true);
		$criteria->compare('COMPANY',$this->COMPANY,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('REMARKS',$this->REMARKS,true);
		$criteria->compare('DATE_CREATED',$this->DATE_CREATED,true);
		$criteria->compare('DATE_MODIFIED',$this->DATE_MODIFIED,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                        'pageSize'=>50,
                ),
		));
	}
}