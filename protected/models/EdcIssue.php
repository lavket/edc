<?php

/**
 * This is the model class for table "edc_issue".
 *
 * The followings are the available columns in table 'edc_issue':
 * @property integer $id
 * @property string $department
 * @property string $location
 * @property integer $issue_qty
 * @property string $issue_date
 * @property string $af1
 * @property string $af2
 * @property string $date_created
 * @property string $date_modified
 */
class EdcIssue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EdcIssue the static model class
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
		return 'edc_issue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department, location, issue_qty, issue_date', 'required'),
			array('issue_qty', 'numerical', 'integerOnly'=>true),
			array('department, location, af1, af2', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, department, location, issue_qty, issue_date, af1, af2, date_created, date_modified', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'department' => 'Department',
			'location' => 'Location',
			'issue_qty' => 'Issue Qty',
			'issue_date' => 'Issue Date',
			'af1' => 'Af1',
			'af2' => 'Af2',
			'date_created' => 'Date Created',
			'date_modified' => 'Date Modified',
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
		$criteria->compare('department',$this->department,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('issue_qty',$this->issue_qty);
		$criteria->compare('issue_date',$this->issue_date,true);
		$criteria->compare('af1',$this->af1,true);
		$criteria->compare('af2',$this->af2,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}