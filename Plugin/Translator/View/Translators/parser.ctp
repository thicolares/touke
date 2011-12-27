<div class="sidebar">
	<?php 
		echo $this->element(
			'chord/song_chords',
			array(),
			array('plugin' => 'chord'
		));
	?>
</div>
<div class="content">
	<h1><?php print $vars['songTitle']; ?> <small><?php print $vars['artistName'][1]; ?></small></h1>
	<?php print '<pre>' . $vars['songLyric'] . '</pre>'; ?>
</div>
