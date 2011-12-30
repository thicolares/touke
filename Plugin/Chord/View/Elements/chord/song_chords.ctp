<?php

	echo $this->Html->css('/chord/css/chord');

	echo $this->Html->script(
		array(
			'/chord/js/bootstrap-twipsy.js',
			'/chord/js/bootstrap-popover.js',
			'/chord/js/jquery.cycle.js',
		)
	);
	
	$javascript = '$(document).ready(function() {
	    $("a[rel=popover]")
	        .popover({
	            offset: 10
	        })
	        .click(function(e) {
	            e.preventDefault()
	        })
	});';
	print $this->Html->scriptBlock($javascript);
	
	$resources = $this->requestAction('/chord/chords/getChordsResources');
	$this->Chord->set('rootNotes', $resources['rootNotes']);
	$this->Chord->set('notations', $resources['notations']);
	$this->Chord->set('allChords', $resources['allChords']);

	$this->Chord->showAllChords();
	
?>