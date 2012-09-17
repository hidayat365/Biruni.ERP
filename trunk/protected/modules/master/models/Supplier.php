<?php

/**
 * This is the model class for customer based on "companies" table.
 *
 * The followings are the available columns in table 'companies':
 *
 * The followings are the available model relations:
 *
 */
class Supplier extends Company
{
	/**
	 * Initializes this model.
	 */
	public function init()
	{
		parent::init();
		$this->type='S';
		$this->code=$this->generateNewCode($this->type);
	}
}