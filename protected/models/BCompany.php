<?php

/**
 * This is the model class for table "b_company".
 *
 * The followings are the available columns in table 'b_company':
 * @property integer $id
 * @property string $title
 * @property string $address
 * @property string $province
 * @property string $city
 * @property string $url
 * @property string $tele
 * @property string $email
 * @property string $remarks
 * @property integer $ctype
 * @property string $createDate
 * @property string $lnkUser
 * @property integer $privilege
 * @property integer $status
 */
class BCompany extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BCompany the static model class
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
		return 'b_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, address, tele, email', 'required'),
			array('ctype, privilege, status', 'numerical', 'integerOnly'=>true),
			array('title, address, tele, email', 'length', 'max'=>50),
			array('province, city', 'length', 'max'=>3),
			array('url', 'length', 'max'=>128),
			array('remarks', 'length', 'max'=>1024),
			array('lnkUser', 'length', 'max'=>20),
			array('createDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, address, province, city, url, tele, email, remarks, ctype, createDate, lnkUser, privilege, status', 'safe', 'on'=>'search'),
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
			'id' => '公司ID',
			'title' => '名字',
			'address' => '地址',
			'province' => '省份',
			'city' => '城市',
			'url' => '公司网址',
			'tele' => '电话',
			'email' => 'Email',
			'remarks' => '注释',
			'ctype' => 'Ctype',
			'createDate' => '创建时间',
			'lnkUser' => '创建者',
			'privilege' => '可见级别',
			'status' => '状态',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('tele',$this->tele,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('ctype',$this->ctype);
		$criteria->compare('createDate',$this->createDate,true);
		$criteria->compare('lnkUser',$this->lnkUser,true);
		$criteria->compare('privilege',$this->privilege);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}