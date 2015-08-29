<?php

/**
 * Test: SoftwareStudio\Moduler\WebObjectLoader basic usage.
 */

use SoftwareStudio\Moduler\WebObjectLoader;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$compiler = new \SoftwareStudio\Moduler\SymlinkCompiler();

$webObjectLoader = new WebObjectLoader('whatever', __DIR__.'/../temp');
$compiler->compile($webObjectLoader, $modulesList);