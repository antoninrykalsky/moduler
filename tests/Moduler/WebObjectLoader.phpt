<?php

/**
 * Test: SoftwareStudio\Moduler\WebObjectLoader basic usage.
 */

use SoftwareStudio\Moduler\WebObjectLoader;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$paths=[];
$paths[]='/var/www/web1.cz';
$paths[]='/var/www/web1.cz/';

$links=[];
$links[]='web1.cz';
$links[]='web1.cz/';

foreach( $paths as $k => $path ) {
	
	$webObject = new WebObjectLoader( $links[$k], $path );

	Assert::same( $paths[0].'/images/logo.png', $webObject->getPath('/images/logo.png'));
	
	Assert::same( $links[0].'/images/logo.png', $webObject->getLink('/images/logo.png') );
	
}

$webObject = new WebObjectLoader( 'whatever', __DIR__.'/../test-data' );
	Assert::same('logo-content', $webObject->getResource('/logo.png'));
try {
	$webObject->getResource('/nonexisting.png');
} catch ( Exception $e ) {
	Assert::truthy( preg_match('#^Wanted webobject missing.#', $e->getMessage()));
}