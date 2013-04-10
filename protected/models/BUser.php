<?php

/**
 * This is the model class for table "b_user".
 *
 * The followings are the available columns in table 'b_user':
 * @property string $userName
 * @property string $pwd
 * @property string $email
 * @property integer $sex
 * @property integer $isCompany
 * @property string $registerDate
 * @property string $lastLoginDate
 * @property string $lastLoginIP
 * @property integer $status
 */
class BUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BUser the static model class
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
		return 'b_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userName', 'required'),
			array('sex, isCompany, status', 'numerical', 'integerOnly'=>true),
			array('userName, pwd, email, lastLoginIP', 'length', 'max'=>20),
			array('registerDate, lastLoginDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userName, pwd, email, sex, isCompany, registerDate, lastLoginDate, lastLoginIP, status', 'safe', 'on'=>'search'),
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
			'userName' => 'User Name',
			'pwd' => 'Pwd',
			'email' => 'Email',
			'sex' => 'Sex',
			'isCompany' => 'Is Company',
			'registerDate' => 'Register Date',
			'lastLoginDate' => 'Last Login Date',
			'lastLoginIP' => 'Last Login Ip',
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

		$criteria->compare('userName',$this->userName,true);
		$criteria->compare('pwd',$this->pwd,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('isCompany',$this->isCompany);
		$criteria->compare('registerDate',$this->registerDate,true);
		$criteria->compare('lastLoginDate',$this->lastLoginDate,true);
		$criteria->compare('lastLoginIP',$this->lastLoginIP,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}