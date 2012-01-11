<!-- <div class="topbar" data-dropdown="dropdown"> -->
<div class="topbar" >
	<div class="topbar-inner">
		<div class="container span16">
			<div class="row">
				<div class="span12">
					<a class="brand" href="/"><?php print Configure::read('ProjectName'); ?></a>
					<!-- <ul class="nav">
						<li class="active"><a href="#">Home</a></li>

						<li class="dropdown">
		              		<a href="#" class="dropdown-toggle">Dropdown</a>
		              		<ul class="dropdown-menu">
		                		<li><a href="#">Secondary link</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Another link</a></li>
							</ul>
						</li> -->
					<!-- </ul> -->
					<?php
					    echo $this->Form->create('Translator', array(
						    'inputDefaults' => array(
						        'label' => false,
						        'div' => false
						    ),
							'type' => 'post',
							'class' => 'pull-left',
							'url' => '/t'
							// 'url' => array(
							// 	                	'controller' => 'translations',
							// 	'prefix' => null,
							// 	'action' => 'parser',
							// 	'plugin' => 'translation'
							// 	                )
						));
		 				// debug($vars[songURL]);
				    	echo $this->Form->input('Translator.song_url', array(
				        	'class' => "span8",
				        	'type' => 'text',
							'error' => false,
							'value' => (isset($vars['songURL']) ? $vars['songURL'] : null),
							'placeholder' => __('Paste some song URL from CifraClub')
				    	));
						//echo $this->Form->submit('to uke');
				
						echo ' ' . $this->Form->button(__('translate to uke'), array(
							'type' => 'submit',
							'class' => 'btn success small'
						));
						echo $this->Form->end();
					?>
				</div>

				 	<div class="fb-like span2" data-href="http://touke.apimenti.com.br" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-colorscheme="dark"></div> 

				<div class="span2 top-twitter">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://touke.apimenti.com.br" data-text="Tocando no ukulele!" data-via="apimenti" data-lang="pt" data-hashtags="touke">Tweetar</a>
				</div>
      <!-- <p class="pull-right">Logged in as <a href="#">username</a></p> -->
		</div><!-- row -->



	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	

	
	

</div>
		
	</div>
</div>