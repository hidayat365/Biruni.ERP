<?php

/**
 * This is the model class for table "companies".
 *
 * The followings are the available columns in table 'companies':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $parent_id
 * @property integer $branch_id
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 * @property integer $active
 * @property string $type
 * @property string $phone_office
 * @property string $phone_alternate
 * @property string $phone_fax
 * @property integer $employees
 * @property string $annual_revenue
 * @property string $industry
 * @property string $ownership
 * @property string $website
 * @property string $billing_address_street
 * @property string $billing_address_city
 * @property string $billing_address_state
 * @property string $billing_address_postalcode
 * @property string $billing_address_country
 * @property string $shipping_address_street
 * @property string $shipping_address_city
 * @property string $shipping_address_state
 * @property string $shipping_address_postalcode
 * @property string $shipping_address_country
 *
 * The followings are the available model relations:
 * @property Journals[] $journals
 * @property Orders[] $orders
 * @property Company $parent
 * @property Company[] $companies
 * @property Branch $branch
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
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
		return 'companies';
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
			array('parent_id, branch_id, created_by, modified_by, active, employees', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>20),
			array('name, website', 'length', 'max'=>255),
			array('type', 'length', 'max'=>1),
			array('phone_office, phone_alternate, phone_fax, industry, ownership, billing_address_street, shipping_address_street', 'length', 'max'=>100),
			array('annual_revenue, billing_address_postalcode, shipping_address_postalcode', 'length', 'max'=>10),
			array('billing_address_city, billing_address_state, billing_address_country, shipping_address_city, shipping_address_state, shipping_address_country', 'length', 'max'=>50),
			array('created_on, modified_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, parent_id, branch_id, created_by, created_on, modified_by, modified_on, active, type, phone_office, phone_alternate, phone_fax, employees, annual_revenue, industry, ownership, website, billing_address_street, billing_address_city, billing_address_state, billing_address_postalcode, billing_address_country, shipping_address_street, shipping_address_city, shipping_address_state, shipping_address_postalcode, shipping_address_country', 'safe', 'on'=>'search'),
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
			'journals' => array(self::HAS_MANY, 'Journals', 'company_id'),
			'orders' => array(self::HAS_MANY, 'Orders', 'company_id'),
			'parent' => array(self::BELONGS_TO, 'Company', 'parent_id'),
			'companies' => array(self::HAS_MANY, 'Company', 'parent_id'),
			'branch' => array(self::BELONGS_TO, 'Branch', 'branch_id'),
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
			'active' => 'Active',
			'type' => 'Type',
			'phone_office' => 'Phone Office',
			'phone_alternate' => 'Phone Alternate',
			'phone_fax' => 'Phone Fax',
			'employees' => 'Employees',
			'annual_revenue' => 'Annual Revenue',
			'industry' => 'Industry',
			'ownership' => 'Ownership',
			'website' => 'Website',
			'billing_address_street' => 'Billing Address Street',
			'billing_address_city' => 'Billing Address City',
			'billing_address_state' => 'Billing Address State',
			'billing_address_postalcode' => 'Billing Address Postalcode',
			'billing_address_country' => 'Billing Address Country',
			'shipping_address_street' => 'Shipping Address Street',
			'shipping_address_city' => 'Shipping Address City',
			'shipping_address_state' => 'Shipping Address State',
			'shipping_address_postalcode' => 'Shipping Address Postalcode',
			'shipping_address_country' => 'Shipping Address Country',
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
		$criteria->compare('active',$this->active);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('phone_office',$this->phone_office,true);
		$criteria->compare('phone_alternate',$this->phone_alternate,true);
		$criteria->compare('phone_fax',$this->phone_fax,true);
		$criteria->compare('employees',$this->employees);
		$criteria->compare('annual_revenue',$this->annual_revenue,true);
		$criteria->compare('industry',$this->industry,true);
		$criteria->compare('ownership',$this->ownership,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('billing_address_street',$this->billing_address_street,true);
		$criteria->compare('billing_address_city',$this->billing_address_city,true);
		$criteria->compare('billing_address_state',$this->billing_address_state,true);
		$criteria->compare('billing_address_postalcode',$this->billing_address_postalcode,true);
		$criteria->compare('billing_address_country',$this->billing_address_country,true);
		$criteria->compare('shipping_address_street',$this->shipping_address_street,true);
		$criteria->compare('shipping_address_city',$this->shipping_address_city,true);
		$criteria->compare('shipping_address_state',$this->shipping_address_state,true);
		$criteria->compare('shipping_address_postalcode',$this->shipping_address_postalcode,true);
		$criteria->compare('shipping_address_country',$this->shipping_address_country,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}