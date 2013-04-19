<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/html5media>
 * @package    html5media
 * @license    LGPL
 */

/**
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['html5'] = '{type_legend},type,headline;{movie_legend},movie_mp4,movie_ogg,movie_webm,movie_preview,movie_width,movie_height,movie_controls,movie_preload,movie_autoplay,movie_loop,movie_order;{audio_legend},audio_mp3,audio_ogg,audio_webm,audio_controls,audio_preload,audio_autoplay,audio_loop,audio_order;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_controls'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_controls'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_preload'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_preload'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_autoplay'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_autoplay'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_loop'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_loop'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_width'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_width'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'tl_class'=>'w50', 'rgxp'=>'digit', 'maxlength' => 5),
	'sql'                     => "varchar(5) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_height'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_height'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'tl_class'=>'w50', 'rgxp'=>'digit', 'maxlength' => 5),
	'sql'                     => "varchar(5) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_preview'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_preview'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly' => true, 'mandatory'=>false, 'tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_webm'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_webm'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'validFileTypes'          => 'webm',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly' => true, 'extensions' => 'webm', 'mandatory'=>false, 'tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_mp4'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_mp4'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'validFileTypes'          => 'mp4',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly' => true, 'extensions' => 'mp4', 'mandatory'=>false, 'tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_ogg'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_ogg'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'validFileTypes'          => 'ogv',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly' => true, 'extensions' => 'ogv', 'mandatory'=>false, 'tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_controls'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_controls'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_preload'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_preload'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_autoplay'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_autoplay'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_loop'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_loop'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_webm'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_webm'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'validFileTypes'          => 'webm',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly' => true, 'extensions' => 'webm', 'mandatory'=>false, 'tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_mp3'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_mp3'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'validFileTypes'          => 'mp3',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly' => true, 'extensions' => 'mp3', 'mandatory'=>false, 'tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_ogg'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_ogg'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'validFileTypes'          => 'ogg',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly' => true, 'extensions' => 'ogg', 'mandatory'=>false, 'tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['audio_order'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['audio_order'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkboxWizard',
	'options'                 => array('mp3','ogg','webm'),
	'eval'                    => array('multiple'=>true, 'feEditable'=>true, 'feGroup'=>'login'),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['movie_order'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['movie_order'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkboxWizard',
	'options'                 => array('mp4','ogg','webm'),
	'eval'                    => array('multiple'=>true, 'feEditable'=>true, 'feGroup'=>'login'),
	'sql'                     => "blob NULL"
);

?>