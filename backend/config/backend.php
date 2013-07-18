<?php

/**
 *
 * backend.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'backend');

return array(
    'basePath' => realPath(__DIR__ . '/..'),
    'preload' => array('bootstrap', 'config'),
    'modules' => array(
	'config' => array(
	    'class' => 'wiro\modules\config\ConfigModule',
	),
	'user' => array(
	    'class' => 'wiro\modules\users\UserModule',
	    'defaultController' => 'admin',
	),
	'auth' => array(
	    'class' => 'wiro.modules.auth.AuthModule',
	    'strictMode' => false,
	    'userClass' => 'wiro\modules\users\models\User',
	    'userIdColumn' => 'userId',
	    'userNameColumn' => 'username',
	),
    ),
    'components' => array(
	'urlManager' => array(
	    'rules' => array(),
	),
	'request' => array(
	    'baseUrlSuffix' => '/admin',
	),
    ),
    'params' => array(),
);