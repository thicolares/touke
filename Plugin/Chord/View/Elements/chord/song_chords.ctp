<?php
	$resources = $this->requestAction('/chord/chords/getChordsResources');
	$this->Chord->set('rootNotes', $resources['rootNotes']);
	$this->Chord->set('notations', $resources['notations']);
	$this->Chord->set('allChords', $resources['allChords']);

	$this->Chord->showAllChords();
?>