<?php

	echo $this->Html->css('/chord/css/chord');

	echo $this->Html->script(
		array(
			'/chord/js/jquery.cycle.lite.js'
		)
	);
	
	
	
	$resources = $this->requestAction('/chord/chords/getChordsResources');
	$this->Chord->set('rootNotes', $resources['rootNotes']);
	$this->Chord->set('notations', $resources['notations']);
	$this->Chord->set('allChords', $resources['allChords']);

	$this->Chord->showAllChords();
	
?>