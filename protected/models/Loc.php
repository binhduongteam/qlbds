<?php

/**
 * This is the model class for table "{{LOC}}".
 *
 * The followings are the available columns in table '{{LOC}}':
 * @property string $id
 * @property string $maloc
 * @property string $duan_id
 * @property string $bandoloc
 * @property string $loaisanpham_id
 * @property string $toado
 * @property integer $date_created
 * @property integer $date_updated
 */
class Loc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Loc the static model class
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
		return '{{LOC}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('duan_id, loaisanpham_id', 'required'),
			array('date_created, date_updated', 'numerical', 'integerOnly'=>true),
			array('maloc', 'length', 'max'=>50),
			array('duan_id, loaisanpham_id', 'length', 'max'=>20),
			array('bandoloc', 'length', 'max'=>200),
			array('toado', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, maloc, duan_id, bandoloc, loaisanpham_id, toado, date_created, date_updated', 'safe', 'on'=>'search'),
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
			'maloc' => 'Maloc',
			'duan_id' => 'Duan',
			'bandoloc' => 'Bandoloc',
			'loaisanpham_id' => 'Loaisanpham',
			'toado' => 'Toado',
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
		$criteria->compare('maloc',$this->maloc,true);
		$criteria->compare('duan_id',$this->duan_id,true);
		$criteria->compare('bandoloc',$this->bandoloc,true);
		$criteria->compare('loaisanpham_id',$this->loaisanpham_id,true);
		$criteria->compare('toado',$this->toado,true);
		$criteria->compare('date_created',$this->date_created);
		$criteria->compare('date_updated',$this->date_updated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}