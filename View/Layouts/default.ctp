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

		<?php echo $this->element("default/topbar"); ?>
	
		<div class="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
		</div>

        <footer>
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
          <p>&copy; Company 2011</p>
        </footer>
      </div>
    </div>
		<?php echo $this->element('sql_dump'); ?>
  </body>
</html>