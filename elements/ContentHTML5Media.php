<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/html5media>
 * @package    html5media
 * @license    LGPL
 */

namespace Contao;

/**
 * Class ContentHTML5Media
 *
 * Front end content element "HTML5 media element with Flash fallback".
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/html5media>
 * @package    Controller
 */
class ContentHTML5Media extends \ContentElement
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

		$this->movie_order = deserialize($this->movie_order, true);
		$this->audio_order = deserialize($this->audio_order, true);
		return parent::generate();
	}

	protected function getFilePathForId($id)
	{
		if (strlen($id) > 0)
		{
			$model = \FilesModel::findOneById($id);
			return $model->path;
		}
		else
		{
			return '';
		}
	}

	/**
	 * Generate content element
	 */
	protected function compile()
	{
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/html5media/vendor/html5media/html5media.min.js';
		$this->Template->movie_controls = $this->movie_controls;
		$this->Template->movie_preload = $this->movie_preload;
		$this->Template->movie_loop = $this->movie_loop;
		$this->Template->movie_autoplay = $this->movie_autoplay;
		$this->Template->movie_webm = $this->getFilePathForId($this->movie_webm);
		$this->Template->movie_ogg = $this->getFilePathForId($this->movie_ogg);
		$this->Template->movie_mp4 = $this->getFilePathForId($this->movie_mp4);
		$movieformats = array('mp4','ogg','webm');
		if (!is_array($this->movie_order || count($this->movie_order) < count($movieformats)))
		{
			$neworder = (is_array($this->movie_order)) ? $this->movie_order : array();
			foreach ($movieformats as $format)
			{
				if (!in_array($format, $neworder))
				{
					array_push($neworder, $format);
				}
			}
			$this->movie_order = $neworder;
		}
		$this->Template->movie_order = $this->movie_order;
		$this->Template->audio_controls = $this->audio_controls;
		$this->Template->audio_preload = $this->audio_preload;
		$this->Template->audio_loop = $this->audio_loop;
		$this->Template->audio_autoplay = $this->audio_autoplay;
		$this->Template->audio_webm = $this->getFilePathForId($this->audio_webm);
		$this->Template->audio_ogg = $this->getFilePathForId($this->audio_ogg);
		$this->Template->audio_mp3 = $this->getFilePathForId($this->audio_mp3);
		$audioformats = array('mp3','ogg','webm');
		if (!is_array($this->audio_order || count($this->audio_order) < count($audioformats)))
		{
			$neworder = (is_array($this->audio_order)) ? $this->audio_order : array();
			foreach ($audioformats as $format)
			{
				if (!in_array($format, $neworder))
				{
					array_push($neworder, $format);
				}
			}
			$this->audio_order = $neworder;
		}
		$this->Template->audio_order = $this->audio_order;
		$this->Template->preview = $this->getFilePathForId($this->movie_preview);
		$this->Template->width = ($this->movie_width) ? $this->movie_width : 320;
		$this->Template->height = ($this->movie_height) ? $this->movie_height : 200;
	}
}

