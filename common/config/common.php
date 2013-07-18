<?php

/**
 *
 * main.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
    'name' => '{APPLICATION NAME}',
    'sourceLanguage' => 'en',
    'language' => 'pl',
    'preload' => array('log'),
    'aliases' => array(
	'root' => __DIR__ . '/../..',
	'frontend' => __DIR__ . '/../../frontend',
	'common' => __DIR__ . '/../../common',
	'backend' => __DIR__ . '/../../backend',
	'vendor' => 'common.lib.vendor',
	'bootstrap' => 'vendor.clevertech.YiiBooster.src',
	'wiro' => 'vendor.wirus15.yii-wiro',
	'HASH' => 'wiro.components.hash',
    ),
    'import' => array(
	'common.components.*',
	'common.helpers.*',
	'common.models.*',
	'application.controllers.*',
	'application.helpers.*',
	'application.models.*',
	'bootstrap.helpers.*',
	'wiro.helpers.*',
    ),
    'components' => array(
	'bootstrap' => array(
	    'class' => 'bootstrap.components.Bootstrap',
	    'responsiveCss' => true,
	    'fontAwesomeCss' => true,
	    'jqueryCss' => false,
	    'enableBootboxJS' => false,
	    'enableNotifierJS' => false,
	),
	'db' => array(
	    'connectionString' => 'sqlite:' . __DIR__. '/../data/main.db',
	    'tablePrefix' => 'tbl_',
	),
	'messages' => array(
	    'class' => 'wiro\components\PhpMessageSource',
	    'sourcePaths' => array(
		'wiro' => 'wiro.messages',
	    ),
	),
	'clientScript' => array(
	    'packages' => require(__DIR__ . '/../lib/vendor/wirus15/yii-wiro/assets/packages.php'),
	), 
	'format' => array(
	    'class' => 'wiro\components\Formatter',
	),
	'upload' => array(
	    'class' => 'wiro\components\UploadManager',
	),
	'thumb' => array(
	    'class' => 'wiro\components\image\ThumbnailCreator',
	),
	'less' => array(
	    'class' => 'wiro\components\less\LessCompiler',
	),
	'mail' => array(
	    'class' => 'wiro\components\mail\YiiMail',
	    'transportType' => 'php',
	    'dryRun' => false,
	    /*'transportOptions' => array(
		'host' => '',
		'username' => '',
		'password' => '',
		'port' => '465',
		'encryption' => 'ssl',
	    ),*/
	),
	'urlManager' => array(
	    'urlFormat' => 'path',
	    'showScriptName' => false,
	    'urlSuffix' => '.html',
	    'rules' => array(
		'<controller:\w+>/<id:\d+>' => '<controller>/view',
		'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
		'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
		'<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
	    ),
	),
	'errorHandler' => array(
	    'errorAction' => 'site/error',
	),
	'log' => array(
	    'class' => 'CLogRouter',
	    'routes' => array(
		array(
		    'class' => 'CDbLogRoute',
		    'connectionID' => 'db',
		    'levels' => 'error, warning',
		),
	    ),
	),
	'request' => array(
	    'class' => 'common.components.HttpRequest',
	),
	'config' => array(
	    'class' => 'wiro\components\config\DbConfig',
	),
	'user' => array(
	    'class' => 'wiro\modules\users\components\WebUser',
	),
	'authManager' => array(
	    'class' => 'CDbAuthManager',
	    'itemTable' => '{{authitem}}',
	    'assignmentTable' => '{{authassignment}}',
	    'itemChildTable' => '{{authitemchild}}',
	    'defaultRoles' => array('user', 'guest'),
	    'behaviors' => array(
		'auth' => array(
		    'class' => 'wiro.modules.auth.components.AuthBehavior',
		),
	    ),
	),
	'hash' => array(
            'class' => 'HASH\adapters\Yii_Hash',
            'strategies' => array(
                'pass' => array(
                    'strategy' => 17,
                    'cost' => 12,
                ),
            ),
        ),
    ),
    'params' => array(
	'php.defaultCharset' => 'utf-8',
	'php.timezone' => 'UTC',
	'adminEmail' => 'admin@localhost',
    )
);