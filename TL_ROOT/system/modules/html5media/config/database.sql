-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
`movie_controls` char(1) NOT NULL default '',
`movie_preload` char(1) NOT NULL default '',
`movie_loop` char(1) NOT NULL default '',
`movie_autoplay` char(1) NOT NULL default '',
`movie_width` varchar(5) NOT NULL default '',
`movie_height` varchar(5) NOT NULL default '',
`movie_preview` varchar(255) NOT NULL default '',
`movie_webm` varchar(255) NOT NULL default '',
`movie_mp4` varchar(255) NOT NULL default '',
`movie_ogg` varchar(255) NOT NULL default '',
`audio_controls` char(1) NOT NULL default '',
`audio_preload` char(1) NOT NULL default '',
`audio_loop` char(1) NOT NULL default '',
`audio_autoplay` char(1) NOT NULL default '',
`audio_webm` varchar(255) NOT NULL default '',
`audio_mp3` varchar(255) NOT NULL default '',
`audio_ogg` varchar(255) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
