<?php

/**
 * This is the model class for table "item_categories".
 *
 * The followings are the available columns in table 'item_categories':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $parent_id
 * @property integer $branch_id
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 *
 * The followings are the available model relations:
 * @property Branch $branch
 * @property ItemCategory $parent
 * @property ItemCategory[] $itemCategories
 * @property Items[] $items
 */
class ItemCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemCategory the static model class
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
		return 'item_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name', 'required'),
			array('parent_id, branch_id, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>20),
			array('name', 'length', 'max'=>255),
			array('created_on, modified_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, parent_id, branch_id, created_by, created_on, modified_by, modified_on', 'safe', 'on'=>'search'),
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
			'branch' => array(self::BELONGS_TO, 'Branch', 'branch_id'),
			'parent' => array(self::BELONGS_TO, 'ItemCategory', 'parent_id'),
			'itemCategories' => array(self::HAS_MANY, 'ItemCategory', 'parent_id'),
			'items' => array(self::HAS_MANY, 'Item', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
			'parent_id' => 'Parent',
			'branch_id' => 'Branch',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'modified_by' => 'Modified By',
			'modified_on' => 'Modified On',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('modified_on',$this->modified_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}