<?php
/**
* This object extends the Smarty object which provides the framework for 
*/
include "smarty.class.php";
class MySmarty extends Smarty {
  
   function __construct() {
   		// Class Constructor. These automatically get set with each new instance.
		parent::__construct();
		$this->template_dir = "./templates";
		$this->compile_dir = "./templates_c/";
		$this->config_dir = "./configs/";
		$this->cache_dir = "./cache/"; 
		$this->force_compile=true;
		$this->caching = false;
   }
}
?>
