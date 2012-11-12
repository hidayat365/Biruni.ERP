<?php

/**
 * This is the model class for customer based on "companies" table.
 *
 * The followings are the available columns in table 'companies':
 *
 * The followings are the available model relations:
 *
 */
class Customer extends Company
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
	 * Initializes this model.
	 */
	public function init()
	{
		parent::init();
		$this->type='C';
		$this->code=$this->generateNewCode($this->type);
		// filter
		$criteria=$this->getDbCriteria();
		$criteria->condition="type='C'";
		$this->setDbCriteria($criteria);
	}
}