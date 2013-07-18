<?php

use wiro\helpers\PathHelper;

/**
 * @author Maciej Krawczyk <wirus15@gmail.com>
 */
class HttpRequest extends CHttpRequest
{
    private $_baseUrl;
    
    public $baseUrlSuffix = '';
    
    public function getBaseUrl($absolute=false)
    {
	if($this->_baseUrl===null) {
	    $this->_baseUrl =  PathHelper::build(array(
		dirname(dirname(dirname($this->getScriptUrl()))),
		$this->baseUrlSuffix,
	    ));
	}
	return $absolute ? $this->getHostInfo() . $this->_baseUrl : $this->_baseUrl;
    }
    
    public function setBaseUrl($baseUrl)
    {
	$this->_baseUrl = $baseUrl;
    }
}