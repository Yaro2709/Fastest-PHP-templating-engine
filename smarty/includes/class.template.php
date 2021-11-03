<?php

require('includes/libs/Smarty/Smarty.class.php');

class template extends Smarty {

   function __construct()
   {
        parent::__construct();
        
        $this->setTemplateDir('templates/'); 
        $this->setCompileDir('cache/templates_cache/');
        $this->setConfigDir('configs/');
        $this->setCacheDir('cache/');
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
   }
   
   public function assign_vars($var, $nocache = true) 
   {		
	   parent::assign($var, NULL, $nocache);
   }
}
?>