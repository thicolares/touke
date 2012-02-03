<?php $cifraClub = $this->Html->link('CifraClub', 'http://www.cifraclub.com.br', array('escape' => false, 'target' => '_blank')); ?>

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit front-banner">
	<div class="row">
		<div class='span4'>
			<span class="legend">Ilustração de Sharon Salisbury
				<?php //echo $this->Html->link('Sharon Salisbury', 'http://sharonsalisbury.blogspot.com/2010_06_01_archive.html', array('target' => '_blank')); ?>
			</span>
		</div>
		<div class='span10'>
			<h1>Cifras Para Ukulele</h1>
			<p>
				<strong>TRADUZA músicas de qualquer instrumento PARA UKULELE</strong>. <br>O 1º Site Brasileiro de Cifras para Ukulele.
				<Br>
			</p>
			<h2>Experimente <small>Escolha uma música no site do <?php print $cifraClub; ?></small></h2>
			<p>
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
			        	'class' => "xlarge span7",
			        	'type' => 'text',
						'error' => false,
						'value' => (isset($vars['songURL']) ? $vars['songURL'] : null),
						'placeholder' => __('Paste some song URL from CifraClub')
			    	));
					//echo $this->Form->submit('to uke');
	
					echo ' ' . $this->Form->button(__('translate to uke'), array(
						'type' => 'submit',
						'class' => 'btn success large'
					));
					echo $this->Form->end();
				?>
		  	</p>
		</div>
	</div><!-- row -->
</div><!-- hero-unit -->

<div class="row">
	<div class='span5'>
		<h2>Como Funciona <small>beta</small></h2>
		<p>
			<ol>
				<li>Copie o endereço de uma música;
					<ul>
						<li><em>Tem que ser do <?php print $cifraClub; ?></em></li>
					</ul>
				</li>
				<li>Cole na caixa de texto no topo;</li>
				<li>Clique em <strong>"<?php print __('translate to uke'); ?>"</strong> e pronto! TADAA! :)</li>
			</ol>
		</p>
	</div><!-- span5 -->
	<div class='span5'>
		<h2>Exemplos <small>Sugira!</small></h2>
		<p>
			<?php
			echo $this->Html->link('<strong>Vamos Fugir</strong> <small>(Gilberto Gil)</small>', '/t/http://www.cifraclub.com.br/gilberto-gil/vamos-fugir/', array('escape' => false)) . ', ';
			echo $this->Html->link('<strong>Pescador de Ilusões</strong> <small>(O Rappa)</small>', '/t/http://www.cifraclub.com.br/o-rappa/pescador-de-ilusoes/', array('escape' => false)) . ', ';
			echo $this->Html->link('<strong>Lambada de Serpente</strong> <small>(Djavan)</small>', '/t/http://www.cifraclub.com.br/djavan/lambada-de-serpente/', array('escape' => false)) . ', ';		
			echo $this->Html->link('<strong>Hoje Eu Quero Sair Só</strong> <small>(Lenine)</small>','/t/http://www.cifraclub.com.br/lenine/hoje-eu-quero-sair-so/sktzg.html', array('escape' => false)) . ', ';
			echo $this->Html->link('<strong>Magamalabares</strong> <small>(Marisa Monte e Carlinhos Brown)</small>','/t/http://www.cifraclub.com.br/marisa-monte/magamalabares/', array('escape' => false)) . ', ';
			echo $this->Html->link('<strong>O Caderno</strong> <small>(Toquinho) – minha namorada adora essa</small>','/t/http://www.cifraclub.com.br/toquinho/caderno/', array('escape' => false)) . '.';
			?>		
		</p>		
	</div><!-- span5 -->
	<div class='span6'>
		<h2>Doação <small>O ToUke é <strong>gratuito</strong>!</small></h2>

		<blockquote>
			<p>Ajude-nos a viabilizar servidores melhores e a criar coisas mais empolgantes ainda para ukulele!</p>
		  <small>Thiago Colares e outros macacos</small>
		</blockquote>
		<div class="donation">
			<div class="row">
				<div class='span4'>
					<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
					<form target="pagseguro" action="https://pagseguro.uol.com.br/checkout/doacao.jhtml" method="post">
					<input type="hidden" name="email_cobranca" value="thicolares@gmail.com" />
					<input type="hidden" name="moeda" value="BRL" />
					<input class="donation" type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/209x48-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
					</form>
				</div> <!-- span4 -->
			
				<div class="span2">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
					">
					<input class="donation"  type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira mais fácil e segura de efetuar pagamentos online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div><!-- span2 -->
			</div><!-- row -->
		</div> <!-- .donation -->
		
		<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
	</div><!-- span6 -->
</div><!-- row -->


<div class="row">
	<div class='span10'>
		<div class="fb-comments" data-href="http://touke.apimenti.com.br" data-num-posts="2" data-width="580"></div>
	</div><!-- span10 -->
	<div class='span6'>
		<h4>Amigos</h4>
		<p>
			<ul>
				<li><?php print $this->Html->link('Ukulele Brasil, blog sobre ukuleles', 'http://ukulelebrasil.blogspot.com/', array('escape' => false, 'target' => '_blank')); ?></li>
				<li><?php print $this->Html->link('MudouAvisou, acompanhe encomendas', 'http://www.mudouavisou.com/', array('escape' => false, 'target' => '_blank')); ?></li>
				<li><?php print $this->Html->link('Apimenti, coisas para internet', 'http://www.apimenti.com.br/', array('escape' => false, 'target' => '_blank')); ?></li>
			</ul>
		</p>
	</div><!-- span6 -->
</div>