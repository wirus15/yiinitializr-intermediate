<?php

/**
 *
 * frontend.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'frontend');

return array(
    'basePath' => realPath(__DIR__ . '/..'),
    'preload' => array('bootstrap', 'config'),
    'modules' => array(
	'user' => array(
	    'class' => 'wiro\modules\users\UserModule',
	),
    ),
    'components' => array(
	'urlManager' => array(
	    'rules' => array(),
	),
	'errorHandler' => array(
	    'errorAction' => 'site/error',
	),
    ),
    'params' => array(),
);