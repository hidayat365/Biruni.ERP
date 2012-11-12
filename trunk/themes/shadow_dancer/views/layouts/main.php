<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="topnav">
		<div class="topnav_text">
            <?php echo CHtml::link('Home',Yii::app()->homeUrl); ?> |
            <!--
            <a href='#'>My Account</a> | 
            <a href='#'>Settings</a> | 
            -->
			<?php 
				// admin link
				if (!Yii::app()->user->isGuest) {
					if (Yii::app()->user->isAdmin) {
						echo CHtml::link('Admin',array('/admin/default')).' | ';
					}
				}
				// logout link
				if (!Yii::app()->user->isGuest) {
					echo 'Welcome '.Yii::app()->user->name.' | '; 
					echo CHtml::link('Logout',array('/site/logout'));
				}
			?>
		</div>
	</div>
	<div id="header">
		<div id="logo">
        	<!--
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png"></img>
            -->
            <?php echo CHtml::encode(Yii::app()->name); ?>
        </div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Dashboard', 'url'=>array('/site/index')),
				/*
				array('label'=>'Order', 'url'=>array('/order/default'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='order' and $this->id=='default')?true:false),
				array('label'=>'Inventory', 'url'=>array('/inventory/default'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='inventory' and $this->id=='default')?true:false),
				array('label'=>'Projects', 'url'=>array('/project/default'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='project' and $this->id=='default')?true:false),
				array('label'=>'Manufacturing', 'url'=>array('/manufacturing/default'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='manufacturing' and $this->id=='default')?true:false),
				array('label'=>'Ledgers', 'url'=>array('/ledger/default'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='ledger' and $this->id=='default')?true:false),
				array('label'=>'Reports', 'url'=>array('/report/default'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='report' and $this->id=='default')?true:false),
				*/
				array('label'=>'Accounts Receivable', 'url'=>array('/ledger/receivable'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='ledger' and $this->id=='receivable')?true:false),
				array('label'=>'Accounts Payable', 'url'=>array('/ledger/payable'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='ledger' and $this->id=='payable')?true:false),
				array('label'=>'Master', 'url'=>array('/master/default'), 'visible'=>!Yii::app()->user->isGuest
						, 'active'=>(isset($this->module) and $this->module->id=='master')?true:false),
				/*
				array('label'=>'Interface', 'url'=>array('/site/page', 'view'=>'interface')),				
				array('label'=>'Graphs', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
				array('label'=>'Form', 'url'=>array('/site/page', 'view'=>'forms')),
				array('label'=>'Buttons & Icons', 'url'=>array('/site/page', 'view'=>'buttons_and_icons')),
				array('label'=>'Error Pages', 'url'=>array('/site/page', 'view'=>'Demo 404 page')),
				*/
			),
		)); ?>
	</div> <!--mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; 2011-<?php print date('Y'); ?> <?php print Yii::app()->params['developerName']; ?>.<br/>
        Developed for <?php print Yii::app()->params['companyName']; ?>. All Rights Reserved.
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
