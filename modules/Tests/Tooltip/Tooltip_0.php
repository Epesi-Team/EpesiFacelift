<?php
/**
 * @author Kuba Slawinski <kslawinski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-tests
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Tests_Tooltip extends Module {
	
	public function body($arg) {
		print "Tooltip Test<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		print "<hr>";
		$this->pack_module('Utils/Tooltip', array('text', 'tip'));
		$image = & $this->init_module('Utils/Image');
		$image->load('alfa');
		print "<hr>";
		
		$ttip = & $this->init_module('Utils/Tooltip', array('text2', 'tip2'));
		$this->display_module($ttip);
		print "<hr>";
		$this->display_module($ttip, array('text3', 'tip3', 'TooltipD'));
		$this->display_module($ttip, array($image->thumb_toHtml(50), 'tip over image'));
			
		//------------------------------ print out src
		print('<hr><b>Main</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Tooltip/Tooltip_0.php');
		print('<hr><b>Common</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Tooltip/TooltipCommon_0.php');
		print('<hr><b>Init</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Tooltip/TooltipInit_0.php');
		print('<hr><b>Install</b><br>');
		$this->pack_module('Utils/CatFile','modules/Tests/Tooltip/TooltipInstall.php');
	}
}
?>



