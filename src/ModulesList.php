<?php

namespace SoftwareStudio\Moduler;

/**
 * Description of ModulesList
 *
 * @author Tonik
 */
class ModulesList {
	
	private $list=array();
	
	public function __construct() {
		$this->list=array();
	}
	
	public function addModule( IModule $module ) {
		$this->list += $module;
	}
	
	public function getModules() {
		return $this->list;
	}
	
}
