<?php

class CustomerController extends CompanyController
{
	/**
	 * Initializes this model.
	 */
	public function init()
	{
		parent::init();
		$this->modelName='Customer';
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Customer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Customer']))
			$model->attributes=$_GET[$class];

		$this->render('index',array(
			'model'=>$model,
		));
	}

}