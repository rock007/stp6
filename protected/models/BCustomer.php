<?php

/**
 * This is the model class for table "b_customer".
 *
 * The followings are the available columns in table 'b_customer':
 * @property integer $id
 * @property string $name
 * @property integer $position
 * @property integer $sex
 * @property string $mobile
 * @property string $tele
 * @property string $qq
 * @property string $email
 * @property string $province
 * @property string $city
 * @property string $remarks
 * @property integer $lnkCompany
 * @property string $lnkUser
 * @property integer $privilege
 * @property integer $status
 * @property string $createDate
 */
class BCustomer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BCustomer the static model class
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
		return 'b_customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, mobile, province, city, lnkUser', 'required'),
			array('position, sex, lnkCompany, privilege, status', 'numerical', 'integerOnly'=>true),
			array('name, mobile, tele, qq, lnkUser', 'length', 'max'=>20),
			array('email', 'length', 'max'=>30),
			array('province', 'length', 'max'=>3),
			array('city', 'length', 'max'=>4),
			array('remarks', 'length', 'max'=>200),
			array('createDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, position, sex, mobile, tele, qq, email, province, city, remarks, lnkCompany, lnkUser, privilege, status, createDate', 'safe', 'on'=>'search'),
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
			'id' => '用户号',
			'name' => '名字',
			'position' => '职位',
			'sex' => '性别',
			'mobile' => '手机',
			'tele' => '电话',
			'qq' => 'QQ',
			'email' => 'Email',
			'province' => '省份',
			'city' => '城市',
			'remarks' => '备注',
			'lnkCompany' => '所属公司',
			'lnkUser' => '创建者',
			'privilege' => '可见级别',
			'status' => '状态',
			'createDate' => '创建日期',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('position',$this->position);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('tele',$this->tele,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('lnkCompany',$this->lnkCompany);
		$criteria->compare('lnkUser',$this->lnkUser,true);
		$criteria->compare('privilege',$this->privilege);
		$criteria->compare('status',$this->status);
		$criteria->compare('createDate',$this->createDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}