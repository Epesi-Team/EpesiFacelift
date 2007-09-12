<?php
/**
 * @author Arkadiusz Bisaga <abisaga@telaxus.com>
 * @copyright Copyright &copy; 2007, Telaxus LLC
 * @version 1.0
 * @license SPL
 * @package epesi-tests
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Tests_SQLTableBrowser_CompaniesInstall extends ModuleInstall {

	public function install() {
		$ret = true;
		$ret &= DB::CreateTable('companies','
			id I4 AUTO KEY,
			name C(32)',
			array('constraints'=>''));
		if(!$ret){
			print('Unable to create table companies.<br>');
			return false;
		}
		return $ret;
	}
	
	public function uninstall() {
		$ret = true;
		$ret &= DB::DropTable('companies');
		return $ret;
	}
	public function requires($v) {
		return array(array('name'=>'Utils/SQLTableBrowser','version'=>0));
	}
}

?>