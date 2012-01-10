<div class="sidebar">
	<div class="row clearfix">
		<div class="span4">
		<?php 
			echo $this->element(
				'chord/song_chords',
				array(),
				array('plugin' => 'chord'
			));
		?>
		</div>

	<!-- <div class="row clearfix">
		<div class="span4">
		<?php 
		//	echo $this->element(
		//		'chord/mercado_socios',
		//		array(),
		//		array('plugin' => 'chord'
		//	));
		?>
		</div>
	</div> -->
	</div>
</div><!-- /sidebar -->

<div class="content">
	<?php
		$buyItLink = $this->Html->link(
			'Comprar esta música',
			$vars['amazonURL'], 
			array('class' => 'btn success')
		);
	?>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	

	<h1><?php print $vars['songTitle']; ?> <small><?php print $vars['artistName'][1]; ?></small></h1>
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php print $vars['bitlyURL']; ?>" data-text="Tocando <?php print $vars['songTitle'];  ?> no ukulele!" data-via="apimenti" data-lang="pt" data-hashtags="touke">Tweetar</a><div class="fb-like" data-href="<?php print FULL_BASE_URL; ?>/t/<?php print $vars['songURL']; ?>" data-send="true" data-width="450" data-show-faces="false"></div>
		
		
		


	<?php print '<pre>' . $vars['songLyric'] . '</pre>'; ?>
	<div class="fb-comments" data-href="<?php print $vars['songURL']; ?>" data-num-posts="2" ></div>
</div>
