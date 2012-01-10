<?php
App::uses('TranslatorAppController', 'Translator.Controller');

/**
 * Paper  Controller
 *
 * PHP version 5
 */
class TranslatorsController extends TranslatorAppController {

    /**
     * Controller name
     *
     * @var string
     * @access public
     */
    public $name = 'Translators';
	
	public $uses = null;
	
    public $helpers = array(
		'Chord.Chord'
	);
	
	var $regExpTitle 			= '/\<h1 id\=[\"]ai_musica[\"].*?\>(.*?)\<\/h1\>/s';
	var $regExpArtist 			= '/\<h2 id\=[\"]ai_artista[\"].*?\>(.*?)\<\/h2\>/s';
	var $regExpArtistRmLink 	= '/\<a.*?\>(.*?)\<\/a\>/s';
	var $regExpLyric 			= '/\<pre id\=[\"]ct_cifra[\"].*?\>(.*?)\<\/pre\>/s';
	var $regExpChords 			= '/\<b.*?\>(.*?)\<\/b\>/s';
	var $regExpCleanChords 		= '/(\<b\>|\<\/b\>)/s';
	// do not remove tabs! Lets hide by using css and transpose someday
	//$regexp_tab 			= '/\<span calss\=[\"]tablatura[\"].*?\>(.*?)\<\span\>/s';
	/**
    * @todo REMOVE TABS
    */

	/**
	 * Song vars
	 *
	 */
	var $songURL;
	var $songHTML;
	var $songTitle;
	var $artistName;
	var $songLyric;
	var $songChords = array();
	var $serialSongChords;
	
	/**
	 * Get content from a given url
	 *
	 * @param string $url URL 
	 * @return void
	 * @author Thiago Colares
	 */
	protected function setHTMLContent(){
		if(!empty($this->songURL)){
			// create a new cURL resource
			$ch = curl_init();

			// set URL and other appropriate options
			curl_setopt($ch, CURLOPT_URL, $this->songURL);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
			
			// grab URL and pass it to the browser
			$this->songHTML = utf8_encode(curl_exec($ch));

			// close cURL resource, and free up system resources
			curl_close($ch);
		
			return true;
		} else {
			return false;
		}
	}
	
	
	/**
	 * Grab Song Title
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	protected function grabSongTitle(){
		// Song title
		if(preg_match($this->regExpTitle, $this->songHTML, $this->songTitle)){
	  	    $this->songTitle = $this->songTitle[1];
	  	    if(!isset($this->songTitle))
	  	        return array('success' => false);
			else
	  	        return array('success' => true);
	  	} else {
  	        return array('success' => false, 'message' => '<strong>ÊTA!</strong> Tem certeza de que <em>\'' . $this->songURL . '\'</em> é o endereço completo de uma <strong>música cifrada</strong> do site <strong>www.cifraclub.com.br</strong>?');
	  	}
	}


	/**
	 * Grab Artist Name
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	protected function grabArtistName(){
		if(
	        preg_match($this->regExpArtist, $this->songHTML, $artistLink) &&
	        preg_match($this->regExpArtistRmLink, $artistLink[0], $this->artistName)
	    ){
	        return array('success' => true);
	    } else {
			return array('success' => false);
	    }
	}


	/**
	 * Grab all lyrics and chords
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	protected function grabLyricsAndChords(){
		// Song entire lyric with chords
        if(preg_match($this->regExpLyric, $this->songHTML, $this->songLyric)){
            $this->songLyric = $this->songLyric[1];    
            // All chords
            if(preg_match_all($this->regExpChords, $this->songLyric, $this->songChords)){
                // Removing repeated chords
                $this->songChords = array_unique($this->songChords[1]);
                // Reseting indexes
                $this->songChords = array_merge($this->songChords,array());
                // Serializing
                $this->serialSongChords = json_encode($this->songChords);
				return array('success' => true);
            } else {
				return array('success' => false);
            }
        } else {
				return array('success' => false);
        }
	}


	/**
	 * Check if urk could not be found ou loaded?
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	protected function checkUrlNotFound(){
		if (empty($this->buffer))
			return array('success' => false, 'message' => 'ERROR_URL_NOT_FOUND');
		else
			return array('success' => true);
	}
	
	
			// // if "http://" is missing
			// $host = parse_url(trim($_GET["song_url"]));
			// if (!isset($host["host"]))
			// {
			// 	$error = ERROR_URL_HTTPLESS;
			// }
			// else
			// {
			// 	$test_song = getSong($host["host"],$buffer,$arr_all_chords, $arr_notations,$arr_root_notes);
			// 	// if the url is not well formed
			// 	if(!$test_song)
			// 		$error = ERROR_NO_AVAILABLE_SITE;
			// 	else{
			// 		 if(!isset($test_song["chords"]) || !isset($test_song["lyric"]))
			// 			$error = ERROR_NO_CHORDS_SITE;
			// 		else{
			// 			$song = $test_song;
			// 		}
			// 	}
			// }




	/**
    * Retrieve artist name, tile, lyric and chords from each song
    * Song without title, artist name or lyric is INVALID!
    * Without chords, just false is set
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	public function parser(){
        $isValidSong = true;

		if($this->request->is('post')){
			// terrible
			$this->redirect('/t/' . $this->request->data['Translator']['song_url']);
		}
		
		// terrible
		$this->songURL = substr_replace($this->params->url, '', 0, 2); // remove 't/' from url
		
		// Set content to this->songHTML
		$this->setHTMLContent();
		
		$grabers = array(
			'grabSongTitle',
			'grabArtistName',
			'grabLyricsAndChords'
		);
		
		$res['success'] = true;
		foreach($grabers as $graber){
			$res = $this->{$graber}();
			if($res['success'] == false){
				$this->Session->setFlash($res['message'], 'default', array('class' => 'alert-message warning'));
				$this->set("title_for_layout", 'Erro');
				$this->view = 'error';
				break;
			}
		}

		$this->set("title_for_layout", Configure::read('ProjectName') . ' | ' . $this->songTitle . ', ' . $this->artistName[1]);
		
		$vars = array(
			'songURL' => $this->songURL,
			'songTitle' => $this->songTitle,
			'artistName' => $this->artistName,
			'songLyric' => $this->songLyric,
			'songChords' => $this->songChords,
			'amazonURL' => $this->_buildAmazonLink(),
			'bitlyURL' => $this->_bitlyURL()
		);
        $this->set(compact('vars'));
	}
	
	
	/**
	 * Provides an "Amazon Buy It" link
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	public function _buildAmazonLink(){
		$keyWords = str_replace(' ', '+', $this->artistName[1]) . '+' . str_replace(' ', '+', $this->songTitle);
		return "http://www.amazon.com/gp/search?ie=UTF8&keywords=$keyWords&tag=" . Configure::read('AmazonID') . "&index=digital-music&linkCode=ur2&camp=1789&creative=9325";
	}
	
	
	/**
	 * Build bitly URL
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	public function _bitlyURL(){
		$bitlyURL = 'https://api-ssl.bitly.com/v3/shorten?access_token=R_9fe25d61a523cb4d2e44d7e433a2fb55&longUrl=' . urlencode('http://touke.apimenti.com.br/t/' . $this->songURL) . '&format=txt';
		
		// create a new cURL resource
		$ch = curl_init();

		// set URL and other appropriate options
		curl_setopt($ch, CURLOPT_URL, $bitlyURL);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
		
		// grab URL and pass it to the browser
		$bitlyURL = utf8_encode(curl_exec($ch));

		// close cURL resource, and free up system resources
		curl_close($ch);

		return $bitlyURL;
	}
	
}