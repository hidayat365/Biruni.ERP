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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="page-wrapper" id="page">
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
				array('label'=>'Accounts', 'url'=>array('/sales/account/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Stoning', 'url'=>array('/activities/meeting/stoning'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'AMWP', 'url'=>array('/activity/amwp'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Help', 'url'=>array('/site/page', 'view'=>'help')),				
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
		Copyright &copy; 2011-<?php print date('Y'); ?> <?php print Yii::app()->params['developerName']; ?>.
        Developed for <?php print Yii::app()->params['companyName']; ?>. All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?> - Theme by <a href="http://webapplicationthemes.com">webapplicationthemes.com</a> - All Rights Reserved.
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
