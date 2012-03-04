<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $id
 * @property integer $parent_id
 * @property integer $branch_id
 * @property integer $category_id
 * @property integer $company_id
 * @property integer $department_id
 * @property integer $project_id
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 * @property integer $active
 * @property integer $completed
 * @property string $order_num
 * @property string $order_date
 * @property string $required_date
 * @property string $remarks1
 * @property string $remarks2
 * @property string $remarks3
 * @property string $remarks4
 * @property string $remarks5
 *
 * The followings are the available model relations:
 * @property Branches $branch
 * @property Order $parent
 * @property Order[] $orders
 * @property OrderCategories $category
 * @property Companies $company
 * @property Projects $project
 * @property Departments $department
 * @property OrderDetails[] $orderDetails
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_num', 'required'),
			array('parent_id, branch_id, category_id, company_id, department_id, project_id, created_by, modified_by, active, completed', 'numerical', 'integerOnly'=>true),
			array('order_num', 'length', 'max'=>50),
			array('created_on, modified_on, order_date, required_date, remarks1, remarks2, remarks3, remarks4, remarks5', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_id, branch_id, category_id, company_id, department_id, project_id, created_by, created_on, modified_by, modified_on, active, completed, order_num, order_date, required_date, remarks1, remarks2, remarks3, remarks4, remarks5', 'safe', 'on'=>'search'),
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
			'branch' => array(self::BELONGS_TO, 'Branches', 'branch_id'),
			'parent' => array(self::BELONGS_TO, 'Order', 'parent_id'),
			'orders' => array(self::HAS_MANY, 'Order', 'parent_id'),
			'category' => array(self::BELONGS_TO, 'OrderCategories', 'category_id'),
			'company' => array(self::BELONGS_TO, 'Companies', 'company_id'),
			'project' => array(self::BELONGS_TO, 'Projects', 'project_id'),
			'department' => array(self::BELONGS_TO, 'Departments', 'department_id'),
			'orderDetails' => array(self::HAS_MANY, 'OrderDetails', 'order_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_id' => 'Parent',
			'branch_id' => 'Branch',
			'category_id' => 'Category',
			'company_id' => 'Company',
			'department_id' => 'Department',
			'project_id' => 'Project',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'modified_by' => 'Modified By',
			'modified_on' => 'Modified On',
			'active' => 'Active',
			'completed' => 'Completed',
			'order_num' => 'Order Num',
			'order_date' => 'Order Date',
			'required_date' => 'Required Date',
			'remarks1' => 'Remarks1',
			'remarks2' => 'Remarks2',
			'remarks3' => 'Remarks3',
			'remarks4' => 'Remarks4',
			'remarks5' => 'Remarks5',
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
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('modified_on',$this->modified_on,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('completed',$this->completed);
		$criteria->compare('order_num',$this->order_num,true);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('required_date',$this->required_date,true);
		$criteria->compare('remarks1',$this->remarks1,true);
		$criteria->compare('remarks2',$this->remarks2,true);
		$criteria->compare('remarks3',$this->remarks3,true);
		$criteria->compare('remarks4',$this->remarks4,true);
		$criteria->compare('remarks5',$this->remarks5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}