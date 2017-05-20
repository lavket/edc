<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $password
 * @property string $email
 * @property string $type
 * @property string $activkey
 * @property string $createtime
 * @property string $lastvisit
 * @property string $superuser
 * @property string $status
 */
class User extends CActiveRecord
{
	public $old_password;
	public $new_password;
	public $con_password;
	public $new_password_repeat;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('username, name, password, email, type', 'required'),
			array('old_password, new_password, con_password', 'required', 'on'=>'changepassword'),
			array('new_password', 'length', 'max'=>50, 'on'=>'changepassword'),
			array('new_password', 'length', 'min'=>6, 'on'=>'changepassword'),
			array('new_password', 'compare', 'compareAttribute'=>'con_password', 'on'=>'changePassword'),
			array('username, superuser, status', 'length', 'max'=>20),
			array('name', 'length', 'max'=>100),
			array('password, email, activkey', 'length', 'max'=>128),
			array('type', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, name, password, email, type, activkey, createtime, lastvisit, superuser, status', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'password' => 'Password',
			'email' => 'Email',
			'type' => 'Type',
			'activkey' => 'Activkey',
			'createtime' => 'Createtime',
			'lastvisit' => 'Lastvisit',
			'superuser' => 'Superuser',
			'status' => 'Status',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('activkey',$this->activkey,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('lastvisit',$this->lastvisit,true);
		$criteria->compare('superuser',$this->superuser,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}