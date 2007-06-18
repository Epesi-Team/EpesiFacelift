<?php
/**
 * Admin class.
 * 
 * This class provides administration module.
 * 
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-base-extra
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

/**
 * Interface which you must implement if you would like to have module administration entry.
 * 
 * @package epesi-base-extra
 * @subpackage admin
 */
interface Base_AdminModuleCommonInterface {
	public static function admin_access();
	public static function admin_caption();
}

class Base_AdminCommon {
	public static function body_access() {
		return Base_AclCommon::i_am_admin();
	}
}

/**
 * Default abstract class for AdminInterface...
 * You can use it for default admin_access and admin_caption functions.
 * Access: Module administrator
 * Caption: <module_name> module 
 * 
 * @package epesi-base-extra
 * @subpackage admin
 */
abstract class Base_AdminModuleCommon extends Module implements Base_AdminModuleCommonInterface {
    public static function admin_access() {
	return Base_AclCommon::i_am_admin();
    }
		
    public static function admin_caption() {
    }
}
?>