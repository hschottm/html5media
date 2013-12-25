<?php

class UpdateRunonceJob extends Controller 
{ 
    public function __construct() 
    { 
        parent::__construct(); 
        $this->import('Database'); 
    } 
    public function run() 
    { 
        //Check for update to C3.2 
        if ($this->Database->tableExists('tl_content')) 
        { 
            $arrFields = $this->Database->listFields('tl_content'); 
            $blnDone = false; 
             
            //check for one table and field 
            foreach ($arrFields as $arrField) 
            { 
                if ($arrField['name'] == 'movie_preview' && $arrField['type'] != 'varchar') 
                { 
	                Database\Updater::convertSingleField('tl_content', 'movie_preview'); 
                } 
                if ($arrField['name'] == 'movie_webm' && $arrField['type'] != 'varchar') 
                { 
	                Database\Updater::convertSingleField('tl_content', 'movie_webm'); 
                } 
                if ($arrField['name'] == 'movie_mp4' && $arrField['type'] != 'varchar') 
                { 
	                Database\Updater::convertSingleField('tl_content', 'movie_mp4'); 
                } 
                if ($arrField['name'] == 'movie_ogg' && $arrField['type'] != 'varchar') 
                { 
	                Database\Updater::convertSingleField('tl_content', 'movie_ogg'); 
                } 
                if ($arrField['name'] == 'audio_webm' && $arrField['type'] != 'varchar') 
                { 
	                Database\Updater::convertSingleField('tl_content', 'audio_webm'); 
                } 
                if ($arrField['name'] == 'audio_mp3' && $arrField['type'] != 'varchar') 
                { 
	                Database\Updater::convertSingleField('tl_content', 'audio_mp3'); 
                } 
                if ($arrField['name'] == 'audio_ogg' && $arrField['type'] != 'varchar') 
                { 
	                Database\Updater::convertSingleField('tl_content', 'audio_ogg'); 
                } 
            } 
             
        } 
         
    } 
} 

$objUpdateRunonceJob = new UpdateRunonceJob(); 
$objUpdateRunonceJob->run();

