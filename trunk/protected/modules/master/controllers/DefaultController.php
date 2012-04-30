<?php

class DefaultController extends BiruniController
{
	public $adminMenu = array(
		array('label'=>'Manage Branches', 'url'=>array('/master/branch')),
		array('label'=>'Manage Departments', 'url'=>array('/master/department')),
		array('label'=>'Manage Projects', 'url'=>array('/master/project')),
		array('label'=>'Manage Customers', 'url'=>array('/master/company/customer')),
		array('label'=>'Manage Suppliers', 'url'=>array('/master/company/supplier')),
		array('label'=>'Manage Accounts', 'url'=>array('/master/account')),
		array('label'=>'Manage Item Categories', 'url'=>array('/master/itemcategory')),
		array('label'=>'Manage Items', 'url'=>array('/master/item')),
		array('label'=>'Manage Order Categories', 'url'=>array('/master/ordercategory')),
	);

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Default action.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
}