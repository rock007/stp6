<?php

/**
 * This is the model class for table "d_buss".
 *
 * The followings are the available columns in table 'd_buss':
 * @property integer $id
 * @property integer $btype
 * @property string $lnkUser
 * @property string $content
 * @property integer $lnk
 * @property string $createDate
 * @property integer $privilege
 * @property integer $status
 */
class DBuss extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DBuss the static model class
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
		return 'd_buss';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('btype, lnk, privilege, status', 'numerical', 'integerOnly'=>true),
			array('lnkUser', 'length', 'max'=>20),
			array('content', 'length', 'max'=>1024),
			array('createDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, btype, lnkUser, content, lnk, createDate, privilege, status', 'safe', 'on'=>'search'),
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
			'btype' => 'Btype',
			'lnkUser' => 'Lnk User',
			'content' => 'Content',
			'lnk' => 'Lnk',
			'createDate' => 'Create Date',
			'privilege' => 'Privilege',
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
		$criteria->compare('btype',$this->btype);
		$criteria->compare('lnkUser',$this->lnkUser,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('lnk',$this->lnk);
		$criteria->compare('createDate',$this->createDate,true);
		$criteria->compare('privilege',$this->privilege);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}