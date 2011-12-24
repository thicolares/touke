<div class="topbar" data-dropdown="dropdown">
	<div class="topbar-inner">
		<div class="container-fluid">
			<a class="brand" href="#"><?php print Configure::read('ProjectName'); ?></a>
			<ul class="nav">
				<li class="active"><a href="#">Home</a></li>

				<li class="dropdown">
              		<a href="#" class="dropdown-toggle">Dropdown</a>
              		<ul class="dropdown-menu">
                		<li><a href="#">Secondary link</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Another link</a></li>
					</ul>
				</li>
			</ul>
			<?php
			    echo $this->Form->create('Translator', array(
					'type' => 'post',
					'inputDefaults' => array('label' => false, 'div' => false),
					'class' => 'pull-left',
					'url' => '/t'
					// 'url' => array(
					// 	                	'controller' => 'translations',
					// 	'prefix' => null,
					// 	'action' => 'parser',
					// 	'plugin' => 'translation'
					// 	                )
				));

		    	echo $this->Form->input('Translator.song_url', array(
		        	'class' => "large",
		        	'type' => 'text',
					'error' => false,
					 'div' => null
		    	));
				echo $this->Form->submit('to uke');
				echo $this->Form->end();
			?>

      <!-- <p class="pull-right">Logged in as <a href="#">username</a></p> -->
		</div>
	</div>
</div>