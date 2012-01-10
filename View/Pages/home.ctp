<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit front-banner">
	<div class="row">
		<div class='span4'>
			<span class="legend">Ilustração de Sharon Salisbury
				<?php //echo $this->Html->link('Sharon Salisbury', 'http://sharonsalisbury.blogspot.com/2010_06_01_archive.html', array('target' => '_blank')); ?>
			</span>
		</div>
		<div class='span10'>
			<h1>Músicas para </h1>
			<p>
				<strong>TRADUZA músicas de qualquer instrumento PARA UKULELE</strong>. <br>A motivação é criar o maior acervo de música brasileira cifrado para ukulele.
				<Br>
			</p>
			<h2>Experimente <small>Escolha uma música no site do CifraClub</small></h2>
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
	<div class='span8'>
		<h2>Como Funciona <small>Por enquanto!</small></h2>
		<p>
			<ol>
				<li>Copie o endereço de uma música do CifraClub (por enquanto, só funciona no CifraClub)</li>
				<li>Cole na caixa de texto a seguir, clique em <strong>"<?php print __('translate to uke'); ?>"</strong> para traduzir e pronto! TADAA! :)</li>
			</ol>
		</p>
	</div>
	<div class='span8'>
		<h2>Exemplos <small>Tem algum imbatível? Sugira!</small></h2>
		<p>
			<?php
			echo $this->Html->link('<strong>Vamos Fugir</strong> <small>(Gilberto Gil)</small>', '/t/http://www.cifraclub.com.br/gilberto-gil/vamos-fugir/', array('escape' => false)) . ', ';
			echo $this->Html->link('<strong>Pescador de Ilusões</strong> <small>(O Rappa)</small>', '/t/http://www.cifraclub.com.br/o-rappa/pescador-de-ilusoes/', array('escape' => false)) . ', ';
			echo $this->Html->link('<strong>Lambada de Serpente</strong> <small>(Djavan)</small>', '/t/http://www.cifraclub.com.br/djavan/lambada-de-serpente/', array('escape' => false)) . ', ';		
			echo $this->Html->link('<strong>Hoje Eu Quero Sair Só</strong> <small>(Lenine)</small>','/t/http://www.cifraclub.com.br/lenine/hoje-eu-quero-sair-so/sktzg.html', array('escape' => false)) . ', ';
			echo $this->Html->link('<strong>Magamalabares</strong> <small>(Marisa Monte e Carlinhos Brown)</small>','/t/http://www.cifraclub.com.br/marisa-monte/magamalabares/', array('escape' => false)) . '.';
			?>
		</p>		
	</div><!-- span16 -->
</div><!-- row -->





<!-- Example row of columns -->
<!-- <div class="row">
  <div class="span8">
    <h2>Top 100</h2>
	<table class="bordered-table zebra-striped">
        <thead>
          <tr>
            <th>#</th>
            <th><?php print __('Song'); ?></th>
            <th><?php print __('Artist'); ?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Somewhere over the rainbow</td>
            <td>The number of columns within the grid</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Somewhere over the rainbow</td>
            <td>The number of columns within the grid</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Somewhere over the rainbow</td>
            <td>The number of columns within the grid</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Somewhere over the rainbow</td>
            <td>The number of columns within the grid</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Somewhere over the rainbow</td>
            <td>The number of columns within the grid</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Somewhere over the rainbow</td>
            <td>The number of columns within the grid</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Somewhere over the rainbow</td>
            <td>The number of columns within the grid</td>
          </tr>



        </tbody>
      </table>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
  <div class="span8">
    <h2>Heading</h2>
     <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
 </div>
  <div class="span8">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>

</div> -->


<?php
/*
<!-- Example row of columns -->
<div class="row">
	<div class="span4">
    <h2>O que é ukulele?</h2>
    <p>É um instrumento musical de cordas beliscadas, semelhante a um violão, mas menor, com apenas 4 cordas. Tem origem em dois instrumentos tradicionais da Ilha da Madeira: machete madeirense e o rajão, que foram levados pelos madeirenses em emigração ao Havaí para trabalhar no cultivo da cana-de-açúcar naquelas ilhas. Ukelele significa “pulga saltadora” no idioma havaiano.</p>
    <!-- <p><a class="btn" href="#">View details &raquo;</a></p> -->
  </div>
  <div class="span4">
    <h2>Participe</h2>
    <!-- <p>Existem várias formas de você participar</p> -->
	<h3>Sou Desenvolvedor(a)</h3>
	<p>Visite nossa página no GitHub e meta a mão na massa.</p>
	
	<h3>Tenho Dedo Podre</h3>
	<p>Você é uma daquelas pessoas que acham um erro a cada clique? Não seja tímido, conte pra gente!</p>
	
	<h3>Idéias</h3>
	<p>Inventivos e inventivas, músicos e musicistas, cusio</p>

    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
  <div class="span4">
    <h2>Colabore</h2>
     <p>Infelizmente ainda não ganhamos dinheiro com o ToUke. Mas felizmente nos divertimos muito com ele! </p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
 </div>
  <div class="span4">
    <h2>Compartilhe</h2>
    <p>O To Uke é um projeto gratuito,</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
  <div class="span4">
    <h2>Apimenti</h2>
    <p>O To Uke é um projeto gratuito,</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
</div>*/

?>
