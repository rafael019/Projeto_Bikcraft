<?php 
// Template Name: Produtos
get_header(); ?>

    <section class="introducao-interna interna_produtos">
        <div class="container">
            <h1>Produtos</h1>
            <p>Conheça todos nossos produtos</p>
        </div>
    </section>


    <section class="container produto_item animar_interno">
        <div class="grid-11">
            <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
            <h2>Passeio</h2>
        </div>
        <div class="grid-5 produto_icone">
            <img src="img/produtos/passeio.png" alt="">
        </div>
        <div class="grid-8">
            <img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
        </div>
        <div class="grid-8 produto_info">
            <p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
            <ul>
                <li>Conforto</li>
                <li>Velocidade</li>
                <li>Design</li>
                <li>Versatilidade</li>
            </ul>
        </div>
    </section>

    <section class="container produto_item">
        <div class="grid-11">
            <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Esporte">
            <h2>Esporte</h2>
        </div>
        <div class="grid-5 produto_icone">
            <img src="img/produtos/esporte.png" alt="Bikcraft Esporte">
        </div>
        <div class="grid-8">
            <img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte">
        </div>
        <div class="grid-8 produto_info">
            <p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
            <ul>
                <li>Conforto</li>
                <li>Velocidade</li>
                <li>Design</li>
                <li>Versatilidade</li>
            </ul>
        </div>
    </section>

    <section class="container produto_item">
        <div class="grid-11">
            <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Retro">
            <h2>Retro</h2>
        </div>
        <div class="grid-5 produto_icone">
            <img src="img/produtos/retro.png" alt="Bikcraft Retro">
        </div>
        <div class="grid-8">
            <img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retro">
        </div>
        <div class="grid-8 produto_info">
            <p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
            <ul>
                <li>Conforto</li>
                <li>Velocidade</li>
                <li>Design</li>
                <li>Versatilidade</li>
            </ul>
        </div>
    </section>

    <section class="orcamento">
        <div class="container">
            <h2 class="subtitulo">Orçamento</h2>
            <form action="enviar.php" method="post" name="form" class="formphp form grid-8">
				<label for="nome">Nome</label>
				<input id="nome" name="nome" type="text">
				<label for="email">E-mail</label>
				<input id="email" name="email" type="text">
				<label for="telefone">Telefone</label>
				<input id="telefone" name="telefone" type="text">

				<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
				<input type="text" class="nao-aparece" name="leaveblank">
				<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
				<input type="text" class="nao-aparece" name="dontchange" value="http://">

				<label for="mensagem">Especificações</label>
				<textarea name="mensagem" id="mensagem"></textarea>

				<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
			</form>

            <div class="orcamento_dados grid-8">
                <h3>Dados</h3>
                <span>+55 21 9999-9999</span><span class="dados_email">contato@bikcraft.com</span>
                <h3>Monte a sua Bikcraft</h3>
                <p>Escolha as especificações:</p>
                <ul>
                    <li>– Cores</li>
                    <li>– Estilo</li>
                    <li>– Medidas</li>
                    <li>– Acessórios</li>
                    <li>– E Outros</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="quebra">
        <blockquote class="quote-externo container">
            <p>“O verdadeiro segredo da felicidade está em ter um genuino interesse por todos os detalhes da vida cotidiana”</p>
            <cite>WILLIAM MORRIS</cite>
        </blockquote>
    </div>


<?php get_footer(); ?>