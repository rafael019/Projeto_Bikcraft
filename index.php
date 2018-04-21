<?php include('header.php'); ?>
	<section class="introducao">
		<div class="container">
			<h1>Bicicletas Feitas a Mão</h1>
			<blockquote class="quote-externo">
				<p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
			<a href="http://bikcraft.com/produtos/" class="btn">Orçamento</a>
		</div>
	</section>

	<section class="produtos container animar">
		<h2 class="subtitulo">Produtos</h2>
		<ul class="produtos_lista">
			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/passeio.png" alt="Bikcraft Passeio">
				</div>
				<h3>Passeio</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
			</li>

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/esporte.png" alt="Bikcraft Passeio">
				</div>
				<h3>Esporte</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
			</li>

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/retro.png" alt="Bikcraft Passeio">
				</div>
				<h3>Retro</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
			</li>
		</ul>

		<div class="call">
			<p>clique aqui e veja os detalhes dos produtos</p>
			<a href="produtos.html" class="btn btn-preto">produtos</a>
		</div>
	</section>
	<!--Fecha Produtos-->

	<section class="portfolio">
		<div class="container">
			<h2 class="subtitulo">Portfólio</h2>
			<ul class="portfolio_lista rslides_portfolio">
				<li>
					<div class="grid-8">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retro">
					</div>
					<div class="grid-8">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio">
					</div>
					<div class="grid-16">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte">
					</div>
				</li>
				<li>
					<div class="grid-8">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio">
					</div>
					<div class="grid-8">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retro">
					</div>
					<div class="grid-16">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte">
					</div>
				</li>
			</ul>
			<div class="call">
				<p>conheça mais o nosso portfólio</p>
				<a href="portfolio.html" class="btn">Portfólio</a>
			</div>
		</div>
	</section>

	<section class="qualidade container">
		<h2 class="subtitulo"> Qualidade</h2>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bikcraft-qualidade.png" alt="Bikcraft">
		<ul class="qualidade_lista">
			<li class="grid-1-3">
				<h3>Durabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeiro de como a necessidade de renovação renovação renovação</p>
			</li>
			<li class="grid-1-3">
				<h3>Design</h3>
				<p>Ainda assim, existem dúvidas a respeiro de como a necessidade de renovação renovação renovação</p>
			</li>
			<li class="grid-1-3">
				<h3>Sustentabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeiro de como a necessidade de renovação renovação renovação</p>
			</li>
		</ul>
		<div class="call">
			<p>conheça mais a nossa história</p>
			<a href="sobre.html" class="btn btn-preto">Sobre</a>
		</div>
	</section>

	<div class="quebra">
		<blockquote class="quote-externo container">
			<p>“O verdadeiro segredo da felicidade está em ter um genuino interesse por todos os detalhes da vida cotidiana”</p>
			<cite>WILLIAM MORRIS</cite>
		</blockquote>
	</div>
<?php include('footer.php'); ?>