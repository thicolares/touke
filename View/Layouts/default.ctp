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
	
		<!-- Facebook -->
		<link rel="image_src" href="<?php print FULL_BASE_URL; ?>/img/logo-touke.jpg" / >
		<meta name="description" content="TRADUZA músicas cifradas de qualquer instrumento para UKULELE!" />
	
		<!-- Le fav and touch icons -->
	    <link rel="shortcut icon" href="images/favicon.ico">
	    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-12359215-5']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
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

				<div class="span12">
					<p>
					Mantido por Thiago Colares, em 
					<?php 
						echo $this->Html->link(
							'Apimenti – coisas para internet',
							'http://www.ohloh.net/p/cakephp',
							array('target' => '_blank', 'escape' => false)
						);
					?>. Veja novidades na nossa	<?php 
							echo $this->Html->link(
								'página no Facebook',
								'http://www.facebook.com/pages/ToUke/242518995758195',
								array('target' => '_blank', 'escape' => false, 'title' => 'To Uke no Facebook')
							);
					?>.
					</p>
					<p><small>Versão <?php print Configure::read('Version'); ?>, de <?php print Configure::read('LastUpdate'); ?>.</small></p>
				</div>
			</div>
        </footer>
      </div>
    </div>
		<?php echo $this->element('sql_dump'); ?>
  </body>
</html>