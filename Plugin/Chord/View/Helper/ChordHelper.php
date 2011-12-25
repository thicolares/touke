<?php
/**
 * @author Thiago Colares
 */

App::uses('AppHelper', 'View/Helper');

class ChordHelper extends AppHelper {
	
	/**
	 * Grabing the root note. ex.: C, D#, Gb etc. 
	 *
	 * @var string
	 */
	var	$regexpRootNote = '/^[A-G]#?b?/s'; // grab the root note
	var $missingChords = array();
	
	var $songChords;
	var $songURL;
	var $songTitle;
	var $artistName;
	
	var $rootNotes;
	var $notations;
	var $allChords;
	
	var $helpers = array(
        'Html',
        'Layout',
        'Paginator'
    );
	
    public function beforeRender() {
		// Song Chords
		$this->songChords = $this->_View->viewVars['vars']['songChords'];
		$this->songURL = $this->_View->viewVars['vars']['songURL'];
		$this->songTitle = $this->_View->viewVars['vars']['songTitle'];
		$this->artistName = $this->_View->viewVars['vars']['artistName'];
		


	}
	
	public function set($var,$value){
		$this->{$var} = $value;
	}

	public function showAllChords(){

		$this->parseChords();
	}
	
	/**
	 * Parse Chord's Names
	 *
	 * @author Thiago Colares
	 */
	public function parseChords(){


	    
	    $html = "";
       	$javascript = "$(document).ready(function() {";
       	$slideId = 0;
   		foreach($this->songChords as $chord){
   				
       		$rootNote = "";

			// Grabing the root note. ex.: C, D#, Gb etc. 
       		if(preg_match($this->regexpRootNote, $chord, $rootNote)){
       			$chordRootNote = $rootNote[0]; //got the root note
       		}	
       		
       		// Remove the root note from the chord and get the chord notation formula
       		$chordFormula = preg_replace($this->regexpRootNote, '', $chord); 
   		
   		    /**
   		    * @todo treat bass note kind! They say "just remove it for ukulele", but it could be better!
   		    */
       		// for now, let's remove the bass note from chord
       		$regexpBass = '/\/[A-G]#?b?/s'; // 
       		$bassNote = "";	
       		if(preg_match($regexpBass, $chordFormula, $bass)){ //if exists		
       			$bassNote = $bass[0]; // without slash / 
       			$chordFormula = preg_replace($regexpBass, '', $chordFormula); //remove it from formula
       		}	
   		
       		// Slash (/) becomes underline (_)
       		$translatedChordFormula = str_replace("/", "_", $chordFormula);
       		$translatedBassNote = str_replace("/", "_", $bassNote);
       		// translating to a known notation
       		$translatedChordFormula = strtr($translatedChordFormula, $this->notations);		
       		// this is the final chord (with bass)
       		// Db => C#, Eb => D# etc.
       		//$finalChord = strtr($chordRootNote.$translatedChordFormula.$translatedBassNote, $this->rootNotes);
   		
       		// this is the final chord (without bass)
       		$finalChord = strtr($chordRootNote . $translatedChordFormula, $this->rootNotes);// Db => C#, Eb => D# 
   
       		// number of variations
			if(isset($this->allChords[$finalChord])){
				$variations = $this->allChords[$finalChord]; 
				
				
				
			} else {
				$this->missingChords[] = $finalChord; 
			}
       		
   		
       		// get chord box html
			$tmp[] = $finalChord;	
       		print $this->_htmlChordBox($finalChord, $variations, $slideId, $chordRootNote, $chordFormula, $bassNote);
       		//$javascript .= $this->_jsChordBox($slideId);		
       		$slideId ++;
   		
   		
       		//$image_filename = "http://www.ukefy.com/chords/".urlencode(str_replace("/", "_", $chord))."~1.gif";
       		//$image_filename = "http://localhost/uke/chords/".$chordRootNote.$chordFormula.".gif";
       		//for($v=1;$v<=$variations;$v++){
       		//$chord_image_filename = "chords/".urlencode($finalChord)."~1.gif";		
       		//$html .= "<span class=\"chord\" style=\"background-image:url('".$chord_image_filename."');\">".$chordRootNote.$chordFormula."</span>";		
   	
       	}
   	debug($tmp);
debug($this->missingChords);
   		
       		/*
   		
       		$image_filename = "http://www.ukefy.com/chords/".urlencode(str_replace("/", "_", $chord)).".gif";					
       		@$url=getimagesize($image_filename);
       		if(is_array($url)){
       			$html .= "<img src='chords/".urlencode(str_replace("/", "_", $chord)).".gif'>";		
       		}else{
       			//$html .= "<a class='missing'  href='make_chord.php?missing_chord_name=".urlencode($chord)."'>Suggest the chord <br><strong>".$chord."</strong></a>";		
       			$html .= "<span class='missing'  href='make_chord.php?missing_chord_name=".urlencode($chord)."'>Ops! Dunno the <strong>".$chord."</strong>. I'm working on it.</strong></span>";		
       		}*/
   	
       	$javascript .= "});";
       	$arr_res["javascript"] = $javascript;
       	$arr_res["html"] = $html;
   
       	return $arr_res;

	}
	
	
	/**
    * Return part of html refered to one chord to make part of the slide of chords at chord panel
    * @todo this hole action should be placed at view / element!
    */
	private function _htmlChordBox($finalChord, $variations, $slideId, $chordRootNote, $chordFormula, $bassNote){	

        
        App::import('Helper', 'Html'); // loadHelper('Html'); in CakePHP 1.1.x.x

    	if($variations>1){
			return $this->chordBoxN($finalChord, $variations, $slideId, $chordRootNote, $chordFormula, $bassNote);
    	}else if($variations == 1){
			return $this->chordBox1($finalChord, $variations, $slideId, $chordRootNote, $chordFormula, $bassNote);
    	}else{
			return $this->chordBox0($finalChord, $slideId, $chordRootNote, $chordFormula, $bassNote);	
    	}

        
    	// $chordImageFilenamePre = urlencode($finalChord)."~";
    	// $html = "<div class=\"chord_box\">
    	// <div class=\"slideshow slideshow" . $slideId . "\">";
    	// if($variations>1){
    	// 	for($v=1;$v<=$variations;$v++){		
    	// 		$html .= "			
    	// 		<div class=\"chord_diagram\" style=\"background: #cbe4b9 \">
    	// 
    	// 			<div class=\"chord_name\">" . $chordRootNote . $chordFormula . $bassNote . "</div>
    	// 			" . $this->Html->image(
    	// 			        $this->webroot . "img/chords/" . rawurlencode($chordImageFilenamePre) . $v . '.gif',
    	// 			        array('alt' => $chordRootNote . $chordFormula . $bassNote)
    	// 			) . "
    	// 			<div class=\"chord_box_controler\">
    	// 				<a class=\"chord_box_prev chord_box_controler_buttom prev" . $slideId . "\"></a>
    	// 				<a class=\"chord_box_next chord_box_controler_buttom next" . $slideId . "\"></a>
    	// 			</div>
    	// 
    	// 		</div>";
    	// 	}				
    	// }else if($variations == 1){
    	//     /**
    	//     * @todo 1.gif refers to the first chord variation. Make somethingl like: get de most common!
    	//     * @todo multicolor chords!
    	//     */
    	// 	//html			
    	// 	$html .= "			
    	// 	<div class=\"chord_diagram\" style=\"background: #cbe4b9 \">
    	// 		<div class=\"chord_name\">" . $chordRootNote . $chordFormula . $bassNote . "</div>
    	// 		" . $this->Html->image(
    	// 		        $this->webroot . "img/chords/" . rawurlencode($chordImageFilenamePre) . '1.gif',
    	// 		        array('alt' => $chordRootNote . $chordFormula . $bassNote)
    	// 		) . "					
    	// 	</div>";
    	// }else{
    	// 	$html .= "
    	// 		<div class=\"chord_diagram\"> 
    	// 			<div class=\"chord_name\">" . $chordRootNote . $chordFormula . $bassNote . "</div>							
    	// 		</div>";		
    	// }
    	// $html .= "</div></div>";	
    	// return $html;
    }

	public function chordBoxN($finalChord, $variations, $slideId, $chordRootNote, $chordFormula, $bassNote){

		$chordImageFilenamePre = urlencode($finalChord)."~";
		
		$html = '';
		for($v = 1; $v <= $variations; $v++){		
			$html .= "			
			<div class=\"chord_diagram\" style=\"background: #cbe4b9 \">

				<div class=\"chord_name\">" . $chordRootNote . $chordFormula . $bassNote . "</div>
				" . $this->Html->image(
				        $this->webroot . "img/chords/" . rawurlencode($chordImageFilenamePre) . $v . '.gif',
				        array('alt' => $chordRootNote . $chordFormula . $bassNote)
				) . "
				<div class=\"chord_box_controler\">
					<a class=\"chord_box_prev chord_box_controler_buttom prev" . $slideId . "\"></a>
					<a class=\"chord_box_next chord_box_controler_buttom next" . $slideId . "\"></a>
				</div>

			</div>";
		}
		
		return "<div class=\"chord_box\">" . 
    	"<div class=\"slideshow slideshow" . $slideId . "\">" . 
		$html . "</div></div>";	
	}

	public function chordBox1($finalChord, $variations, $slideId, $chordRootNote, $chordFormula, $bassNote){
		
		$chordImageFilenamePre = urlencode($finalChord)."~";
		
		$html = "			
		<div class=\"chord_diagram\" style=\"background: #cbe4b9 \">
			<div class=\"chord_name\">" . $chordRootNote . $chordFormula . $bassNote . "</div>
			" . $this->Html->image(
			        $this->webroot . "img/chords/" . rawurlencode($chordImageFilenamePre) . '1.gif',
			        array('alt' => $chordRootNote . $chordFormula . $bassNote)
			) . "					
		</div>";
		
		return "<div class=\"chord_box\">" . 
    	"<div class=\"slideshow slideshow" . $slideId . "\">" . 
		$html . "</div></div>";
	}

	public function chordBox0($finalChord, $slideId, $chordRootNote, $chordFormula, $bassNote){
		$html = "
			<div class=\"chord_diagram\"> 
				<div class=\"chord_name\">" . $chordRootNote . $chordFormula . $bassNote . "</div>							
			</div>";
			
		return "<div class=\"chord_box\">" . 
    	"<div class=\"slideshow slideshow" . $slideId . "\">" . 
		$html . "</div></div>";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/**
 * After render callback. Called after the view file is rendered
 * but before the layout has been rendered.
 *
 * @return void
 */
    public function afterRender() {
    }
/**
 * Before layout callback. Called before the layout is rendered.
 *
 * @return void
 */
    public function beforeLayout() {
    }
/**
 * After layout callback. Called after the layout has rendered.
 *
 * @return void
 */
    public function afterLayout() {
    }
/**
 * Called after LayoutHelper::setNode()
 *
 * @return void
 */
    public function afterSetNode() {
        // field values can be changed from hooks
        $this->Layout->setNodeField('title', $this->Layout->node('title') . ' [Modified by RegistrationHelper]');
    }
/**
 * Called before LayoutHelper::nodeInfo()
 *
 * @return string
 */
    public function beforeNodeInfo() {
        return '<p>beforeNodeInfo</p>';
    }
/**
 * Called after LayoutHelper::nodeInfo()
 *
 * @return string
 */
    public function afterNodeInfo() {
        return '<p>afterNodeInfo</p>';
    }
/**
 * Called before LayoutHelper::nodeBody()
 *
 * @return string
 */
    public function beforeNodeBody() {
        return '<p>beforeNodeBody</p>';
    }
/**
 * Called after LayoutHelper::nodeBody()
 *
 * @return string
 */
    public function afterNodeBody() {
        return '<p>afterNodeBody</p>';
    }
/**
 * Called before LayoutHelper::nodeMoreInfo()
 *
 * @return string
 */
    public function beforeNodeMoreInfo() {
        return '<p>beforeNodeMoreInfo</p>';
    }
/*
 * Called after LayoutHelper::nodeMoreInfo()
 *
 * @return string
 */
    public function afterNodeMoreInfo() {
        return '<p>afterNodeMoreInfo</p>';
    }
}
