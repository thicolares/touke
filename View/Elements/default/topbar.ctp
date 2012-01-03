<!-- <div class="topbar" data-dropdown="dropdown"> -->
<div class="topbar" >
	<div class="topbar-inner">
		<div class="container-fluid">
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
		        	'class' => "span10",
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
      <!-- <p class="pull-right">Logged in as <a href="#">username</a></p> -->
 <div class="fb-like" data-href="http://touke.apimenti.com.br" data-send="true" data-layout="button_count" data-width="50" data-show-faces="false" data-colorscheme="dark"></div>
		</div>
		
	</div>
</div>