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
	<h1><?php print $vars['songTitle']; ?> <small><?php print $vars['artistName'][1]; ?></small> <div class="fb-like" data-href="<?php print FULL_BASE_URL; ?>/t/<?php print $vars['songURL']; ?>" data-send="true" data-width="450" data-show-faces="false"></div></h1>
	<p><?php print $buyItLink; ?></p>
	<?php print '<pre>' . $vars['songLyric'] . '</pre>'; ?>
	<div class="fb-comments" data-href="<?php print $vars['songURL']; ?>" data-num-posts="2" ></div>
</div>
