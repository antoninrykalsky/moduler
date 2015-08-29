<?php

namespace SoftwareStudio\Moduler;

/**
 * Class excapsulating basic WebObject functinality
 *
 * @author Antonin Rykalsky
 */
final class WebObjectLoader {

	private $resourcesLink;
	
	private $resourcesPath;
	
	const SEP = '/';
	
	
	function __construct($resourcesLink, $resourcesPath) {
		
		$this->resourcesLink = rtrim($resourcesLink, '/\\' );
		
		$this->resourcesPath = rtrim($resourcesPath, '/\\' );
		
	}

	public function getResource( $descriptor ) {
		
		$path = $this->getPath( $descriptor );
		
		$this->checkDescriptor( $descriptor );
		
		return file_get_contents( $path );
		
	}
	
	public function getLink( $descriptor ) {
		
		return $this->getResourceLink().$descriptor;
		
	}
	
	public function getPath( $descriptor ) {
		
		return $this->resourcesPath.$descriptor;
		
	}
	
	private function checkDescriptor( $descriptor, $withCheck = true ) {
		
		$path = $this->getPath( $descriptor );
		
		if( $withCheck && !file_exists($path)) {
			throw new ModulerException("Wanted webobject missing. [".$path."]");
		}
		
	}
	
	private function getResourceLink() {
		
		if( empty($this->resourcesLink )) {
			throw new ModulerException("Moduler is not correctly initializated. Missing resource link path.");
		}
		
		return $this->resourcesLink;
		
	}
}