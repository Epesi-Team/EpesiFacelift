<?php
/**
 * @author Arkadiusz Bisaga <abisaga@telaxus.com>
 * @copyright Copyright &copy; 2007, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-tests
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Tests_GenericBrowserCommon {
	public static function menu(){
		return array('Tests'=>array('__submenu__'=>1,'Generic Browser'=>array()));
	}
}

?>
