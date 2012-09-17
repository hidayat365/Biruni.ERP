<?php

class PayableController extends JournalController
{
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Journal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

}