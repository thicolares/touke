<?php
App::uses('ChordAppController', 'Chord.Controller');

/**
 * Paper  Controller
 *
 * PHP version 5
 */
class ChordsController extends ChordAppController {

    /**
     * Controller name
     *
     * @var string
     * @access public
     */
    public $name = 'Chords';
	
	public $uses = array('Chord.Chord');
	
    public $helpers = array(
		'Chord.Chord'
	);
	
	/**
	 * Set some chords resources to view
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	public function getChordsResources(){
		return array(
			'rootNotes' => $this->Chord->rootNotes,
			'notations' => $this->Chord->notations,
			'allChords' => $this->Chord->allChords
		);
	}
	
}