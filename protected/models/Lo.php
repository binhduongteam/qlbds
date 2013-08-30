<?php

/**
 * This is the model class for table "{{LO}}".
 *
 * The followings are the available columns in table '{{LO}}':
 * @property string $id
 * @property integer $tinhtrang
 * @property string $sanpham_id
 * @property string $malo
 * @property string $toado
 * @property string $loc_id
 * @property string $khachhang_id
 * @property integer $date_created
 * @property integer $date_updated
 */
class Lo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lo the static model class
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
		return '{{LO}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tinhtrang, sanpham_id, loc_id, khachhang_id', 'required'),
			array('tinhtrang, date_created, date_updated', 'numerical', 'integerOnly'=>true),
			array('sanpham_id, loc_id, khachhang_id', 'length', 'max'=>20),
			array('malo, toado', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tinhtrang, sanpham_id, malo, toado, loc_id, khachhang_id, date_created, date_updated', 'safe', 'on'=>'search'),
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
			'tinhtrang' => 'Tinhtrang',
			'sanpham_id' => 'Sanpham',
			'malo' => 'Malo',
			'toado' => 'Toado',
			'loc_id' => 'Loc',
			'khachhang_id' => 'Khachhang',
			'date_created' => 'Date Created',
			'date_updated' => 'Date Updated',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('tinhtrang',$this->tinhtrang);
		$criteria->compare('sanpham_id',$this->sanpham_id,true);
		$criteria->compare('malo',$this->malo,true);
		$criteria->compare('toado',$this->toado,true);
		$criteria->compare('loc_id',$this->loc_id,true);
		$criteria->compare('khachhang_id',$this->khachhang_id,true);
		$criteria->compare('date_created',$this->date_created);
		$criteria->compare('date_updated',$this->date_updated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}