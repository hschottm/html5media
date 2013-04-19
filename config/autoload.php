<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Html5media
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentHTML5Media' => 'system/modules/html5media/elements/ContentHTML5Media.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_html5_media' => 'system/modules/html5media/templates',
));
