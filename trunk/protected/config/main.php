<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'ERP Indonesia',
    'theme'=>'shadow_dancer',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.master.controllers.*',
	),

	'modules'=>array(
		'admin',
        'master',
		'order',
		'ledger',
		'sales',
		'purchasing',
		'project',
		'inventory',
		'manufacturing',
		'report',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'*birunierp#',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;dbname=biruni_erp',
			'username' => 'postgres',
			'password' => 'ayyasy',
			'tablePrefix' => '',
			'emulatePrepare' => false,
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'admin@birunierp.com',
		'productName'=>'ERP Indonesia',
		'companyName'=>'ESQ Leadership Center',
		'developerName'=>'Agrabudi Multimedia',
		'defaultPageSize'=>50,
		'defaultDateFormat'=>'yy-mm-dd', //format tanggal untuk jquery ui datepicker
	),
);