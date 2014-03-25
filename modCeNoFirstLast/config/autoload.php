<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package RemoveFirstAndLast
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Hooks
	'slashworks\ModCeNoFirstLast' => 'system/modules/modCeNoFirstLast/hooks/ModCeNoFirstLast.php',
));
