<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Helmut Schottmüller 2010
 * @author     Helmut Schottmüller <http://www.aurealis.de>
 * @package    Frontend
 * @license    LGPL
 * @filesource
 */


/**
 * Class ContentHTML5Media
 *
 * Front end content element "HTML5 media element with Flash fallback".
 * @copyright  Helmut Schottmüller 2010
 * @author     Helmut Schottmüller <http://www.aurealis.de>
 * @package    Controller
 */
class ContentHTML5Media extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_html5_media';


	/**
	 * Return if the file does not exist
	 * @return string
	 */
	public function generate()
	{
		// Return if there is no file
		if (!strlen($this->movie_webm) && !strlen($this->movie_ogg) && !strlen($this->movie_mp4) && !strlen($this->audio_webm) && !strlen($this->audio_ogg) && !strlen($this->audio_mp3))
		{
			return '';
		}

		return parent::generate();
	}


	/**
	 * Generate content element
	 */
	protected function compile()
	{
		$GLOBALS['TL_JAVASCRIPT'][] = 'plugins/html5media/html5media.min.js';
		$this->Template->movie_controls = $this->movie_controls;
		$this->Template->movie_preload = $this->movie_preload;
		$this->Template->movie_loop = $this->movie_loop;
		$this->Template->movie_autoplay = $this->movie_autoplay;
		$this->Template->movie_webm = $this->movie_webm;
		$this->Template->movie_ogg = $this->movie_ogg;
		$this->Template->movie_mp4 = $this->movie_mp4;
		$this->Template->audio_controls = $this->audio_controls;
		$this->Template->audio_preload = $this->audio_preload;
		$this->Template->audio_loop = $this->audio_loop;
		$this->Template->audio_autoplay = $this->audio_autoplay;
		$this->Template->audio_webm = $this->audio_webm;
		$this->Template->audio_ogg = $this->audio_ogg;
		$this->Template->audio_mp3 = $this->audio_mp3;
		$this->Template->preview = $this->movie_preview;
		$this->Template->width = ($this->movie_width) ? $this->movie_width : 320;
		$this->Template->height = ($this->movie_height) ? $this->movie_height : 200;
	}
}

?>