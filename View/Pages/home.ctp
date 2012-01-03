<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit front-banner">
	<div class="row">
		<div class="span4">
			&nbsp;
			<span class="legend">Ilustração de Sharon Salisbury
				<?php //echo $this->Html->link('Sharon Salisbury', 'http://sharonsalisbury.blogspot.com/2010_06_01_archive.html', array('target' => '_blank')); ?>
			</span>
				
		</div>
		<div class="span14 font-welcome-box">
			
	<h1>Nós Amamos Ukulele</h1>
	<p>
		<strong>Traduza músicas cifradas de qualquer instrumento para acordes em ukulele</strong>. Por isto o nome <em>to uke</em>, ou seja, <em>para ukulele</em>. A motivação é criar o maior acervo de música brasileira para ukulele.
		<Br>
	</p>
	<h2>Como Funciona <small>(por enquanto!)</small></h2>
	<p>
		<ol>
			<li>Copie o endereço de um site que tenha uma música cifrada de sua preferência. (por enquanto, só do Cifraclub)</li>
			<li>Cole na caixa "Página com cifras", clique em "para ukulele" para traduzir e pronto! TADAA! :)</li>
			
			
			</ol>
	</p>
	<h2>Exemplos <small>Tem algum imbatível? Sugira!</small></h2>
	<p>
		<?php
		echo $this->Html->link('<strong>Somewhere Over the Rainbow</strong> (Isreal Kamakawiwoole)', '/t/http://www.cifraclub.com.br/isreal-kamakawiwoole/somewhere-over-the-rainbow/', array('escape' => false)) . ', ';
		echo $this->Html->link('<strong>Hey, Soul Sister</strong> (Train)', '/t/http://www.cifraclub.com.br/train/hey-soul-sister/', array('escape' => false)) . ', ';		
		echo $this->Html->link('<strong>Under Pressure</strong> (Queen)','/t/http://www.cifraclub.com.br/queen/under-pressure/', array('escape' => false)) . ', ';
		echo $this->Html->link('<strong>Magamalabares</strong> (Marisa Monte e Carlinhos Brown)','/t/http://www.cifraclub.com.br/marisa-monte/magamalabares/', array('escape' => false)) . ', ';
		echo $this->Html->link('Mistério do Planeta (Novos Baianos)','/t/http://www.cifraclub.com.br/os-novos-baianos/misterio-do-planeta/') . ', ';

		?>
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
	        	'class' => "xlarge span10",
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
	</div>
	
</div>





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

<hr>

<!-- Example row of columns -->
<div class="row">
	<div class="span4">
    <h2>O que é ukulele?</h2>
    <p>É um instrumento musical de cordas beliscadas, semelhante a um violão, mas menor. Tem apenas 4 cordas usualmente afinadas em lá, mi, dó e sol, sendo a corda sol mais aguda que a dó. O ukulele tem origem em dois instrumentos tradicionais da Ilha da Madeira: machete madeirense e o rajão, que foram levados pelos madeirenses quando estes emigraram para o Havaí para trabalhar no cultivo da cana-de-açúcar naquelas ilhas. Ukelele significa “pulga saltadora” no idioma havaiano.</p>
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
</div>