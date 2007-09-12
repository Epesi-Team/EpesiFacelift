<?php
/**
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2007, Telaxus LLC
 * @version 1.0
 * @license SPL
 * @package epesi-tests
 * @subpackage callbacks
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Tests_Callbacks extends Module {

	public function body() {
		print('<a '.$this->create_callback_href(array($this,'instead')).'>Instead</a> :: ');
		print('<a '.$this->create_callback_href(array($this,'before')).'>Before</a> :: ');
		print('<a '.$this->create_callback_href(array($this,'src')).'>Source of this example</a> :: ');
		print('<a '.$this->create_callback_href(array($this,'form1')).'>Form test</a>');
	}
	
	public function form1() {
		$form = & $this->init_module('Libs/QuickForm',null,'f1');
		$form->addElement('header',null,'Form 1');
		$form->addElement('submit',null,'OK');
	
		if($form->validate()) {
			print('Form 1 validated<hr>');
			return false;
		} else {
			print('<a '.$this->create_callback_href(array($this,'form2')).'>Go to form2</a><br>');
			$form->display();
		}
		return true;
	}

	public function form2() {
		if($this->is_back()) return false;
		$form = & $this->init_module('Libs/QuickForm',null,'f2');
		$form->addElement('header',null,'Form 2');
		$form->addElement('textarea','text','Form 2');
//		$form->setDefaults(array('text'=>"wielka dupa\na"));
		$form->addElement('submit',null,'OK');
		$form->addElement('button',null,'Cancel',$this->create_back_href());
		
		if($form->validate()) {
			print('Form 2 validated<hr>');
			print($form->exportValue('text'));
		//	return true;
		}
		$form->display();
		return true;
	}
	
	public function instead() {
		if($this->is_back()) return false;
		
		print('instead<hr>');
		
		print('<a '.$this->create_callback_href(array($this,'instead2')).'>Instead2</a> :: ');
		print('<a '.$this->create_back_href().'>Back</a>');
		
		return true;
	}

	public function instead2() {
		if($this->is_back()) return false;
		
		print('instead2<hr>');
		
		print('<a '.$this->create_back_href().'>Back</a> :: ');
		print('<a '.$this->create_back_href(2).'>Back twice</a>');
		
		return true;
	}
	
	public function before() {
		print('before<hr>');
		return false;
	}
	
	public function src() {
		//------------------------------ print out src
		print('<hr><b>Install</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Callbacks/CallbacksInstall.php');
		print('<hr><b>Init</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Callbacks/CallbacksInit_0.php');
		print('<hr><b>Main</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Callbacks/Callbacks_0.php');
		print('<hr><b>Common</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Callbacks/CallbacksCommon_0.php');
	}

}

?>