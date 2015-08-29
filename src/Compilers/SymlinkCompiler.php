<?php

namespace SoftwareStudio\Moduler;

/**
 * Compile file structure with symbolic links. 
 * There comes configuration and list of modules to compile.
 *
 * @author Antonin Rykalsky
 */
class SymlinkCompiler extends AbstractCompiler {

	public function compile( ModulesList $modulesList ) {
		
		/** @var $module Module */
		foreach( $modulesList->getModules() as $module ) {
			
		}
		
	}
	
}
