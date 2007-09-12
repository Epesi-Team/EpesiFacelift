<?php
/**
 * User_AdministratorInstall class.
 * 
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @license SPL
 * @package epesi-base-extra
 * @subpackage user-administrator
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Base_User_AdministratorInstall extends ModuleInstall {
	public function version() {
		return array('1.0.0');
	}
	
	public function install() {
		return true;
	}
	
	public function uninstall() {
		return true;
	}
	public function requires($v) {
		return array(
			array('name'=>'Libs/QuickForm','version'=>0), 
			array('name'=>'Base/Admin','version'=>0), 
			array('name'=>'Base/Acl','version'=>0), 
			array('name'=>'Utils/GenericBrowser','version'=>0), 
			array('name'=>'Base/User','version'=>0), 
			array('name'=>'Base/ActionBar','version'=>0), 
			array('name'=>'Base/User/Login','version'=>0), 
			array('name'=>'Base/Lang','version'=>0));
	}
}

?>
