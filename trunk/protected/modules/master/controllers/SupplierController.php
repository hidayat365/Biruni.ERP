<?php

class SupplierController extends CompanyController
{
	/**
	 * Initializes this model.
	 */
	public function init()
	{
		parent::init();
		$this->modelName='Supplier';
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Supplier('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Supplier']))
			$model->attributes=$_GET[$class];

		$this->render('index',array(
			'model'=>$model,
		));
	}

}