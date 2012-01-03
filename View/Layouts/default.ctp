<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="utf-8">

	    <meta name="description" content="">
	    <meta name="author" content="">
		<?php //echo $this->Html->charset(); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

	    <!-- Le styles -->
		
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('default');

			echo $this->Html->script('jquery');

			echo $scripts_for_layout;
		?>
		
		<style type="text/css">
	      body {
	        padding-top: 60px;
	      }
	    </style>
		<!-- Le fav and touch icons -->
	    <link rel="shortcut icon" href="images/favicon.ico">
	    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	</head>

	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<?php echo $this->element("default/topbar"); ?>
	
		<div class="container-fluid">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
		</div>

        <footer>
			<div class="row clearfix">
				<div class="span5">
					&nbsp;
				</div>

				<div class="span3">
					
					<?php 
						echo $this->Html->link(
							$this->Html->image('http://cloud.ohloh.net/attachments/3178/cake2000_med.png', array('border' => '0')),
							'http://www.ohloh.net/p/cakephp',
							array('target' => '_blank', 'escape' => false)
						);
					?>
					<?php 
						// echo $this->Html->link(
						// 	$this->Html->image('cake.power.gif', array('border' => '0')),
						// 	'http://www.cakephp.org/',
						// 	array('target' => '_blank', 'escape' => false)
						// );
					?>
				</div>

				<div class="span3">
					<a href="http://www.w3.org/html/logo/"><img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-performance.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Performance &amp; Integration" title="HTML5 Powered with CSS3 / Styling, and Performance &amp; Integration">
				</div>
			</div>
        </footer>
      </div>
    </div>
		<?php echo $this->element('sql_dump'); ?>
  </body>
</html>