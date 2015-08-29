<?php

namespace SoftwareStudio\Moduler;

/**
 * Description of Moduler
 *
 * @author Antonin Rykalsky
 */
class Moduler {

	private $webObjectLoader;
	
	
	function __construct( WebObjectLoader $webObjectLoader) {
		$this->webObjectLoader = $webObjectLoader;
	}
	
	function getWebObjectLoader() {
		return $this->webObjectLoader;
	}


	
}
