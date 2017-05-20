<?php

/**
 * This is the model class for table "user_detail".
 *
 * The followings are the available columns in table 'user_detail':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $rand
 * @property string $email
 * @property integer $department_id
 * @property string $date_added
 * @property string $date_modified
 */
class UserDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserDetail the static model class
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
		return 'user_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, rand, email, department_id, date_added, date_modified', 'required'),
			array('department_id', 'numerical', 'integerOnly'=>true),
			array('username, email', 'length', 'max'=>256),
			// array('password', 'length', 'max'=>1000),
			array('rand', 'length', 'max'=>50),
			array('email', 'email'),
			array('password', 'length', 'max'=>150),
			array('password', 'length', 'min'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, rand, email, department_id, date_added, date_modified', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'rand' => 'Rand',
			'email' => 'Email',
			'department_id' => 'Department',
			'date_added' => 'Date Added',
			'date_modified' => 'Date Modified',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($value='')
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		
		if($value=="Admin")
		{
			$criteria->condition = "department_id  = '1'";
		}
		
		if($value=="Marketing")
		{
			$criteria->condition = "department_id  = '2'";
		}
		if($value=="Account")
		{
			$criteria->condition = "department_id  = '3'";
		}
		
		

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('rand',$this->rand,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}