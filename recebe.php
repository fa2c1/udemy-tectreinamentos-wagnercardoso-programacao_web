<!doctype html>
<html lang="pt-br">
	<head>
		<title>.::Programação Web::.</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- Bootstrap CSS v5.2.0-beta1 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body>

		<header>
			<div class="topo">
				<img src="img/topo_aula.png" class="img-fluid" alt="Imagens de dispositivos eletronicos">
			</div>
			<div>
				<br><br><br><br>
				<h1>TECTREINAMENTOS - PROGRAMAÇÃO WEB COM PHP</h1>
			</div>
		</header>

		<nav class="navbar bg-light">
			<div class="container-fluid">
				<a class="navbar-brand">
					<h6>Prof. Wagner Cardoso</h6>
				</a>
				<form class="d-flex" role="search" method="get" action="recebe.php">
					<input class="form-control me-4" type="text" name="pesquisa" placeholder="Pesquise aqui">
					<button class="btn btn-outline-primary" type="submit" name="enviar">Pesquisar</button>
				</form>
			</div>
		</nav>

		<section>
			<div class="container">
				<div class="conteudo">
					<?php
						$pesquisa = $_GET["pesquisa"];
						switch ($pesquisa) {
							case 'office':
								echo "
									<h2>Pacote Office</h2><br>
									<img src='img/office.png' class='img-fluid send' alt='Office 365'><br><br>
									Faculdade, cursos livres e técnicos<br>
									Mercado de trabalho disputado, empresas cada vez mais exigentes...<br>
									Tempo e Dinheiro, são fatores que ocupam e preocupam pessoas o tempo todo na atual sociedade.<br>
									Microsoft Office Essencial, apresenta a forma mais simples e rápida de aprender as principais ferramentas da Microsoft para a criação de Planilhas eletrônicas, 
									Formatação de Textos e Criação de Apresentações com os já conhecidos e amplamente utilizados Softwares Excel, Word e Power Point.";
								break;
							case 'negocios':
								echo "
									<h2>Negócios Digitais</h2>
									<img src='img/negocios.png' class='img-fluid send' alt='Dinheiro em caixa'><br><br>
									Já imaginou desenvolver um site e obter renda extra com isso?<br>
									Já imaginou trabalhar como afiliado de produtos digitais, gerando renda sem ter que abandonar seu atual emprego ou atividade?<br>
									Prestar serviços de desenvolvimento de sites para empreendedores digitais, com campanhas completas de Marketing digital utilizando Google Ads, Facebook Ads?<br>
									Tornar - se um afiliado Profissional de plataformas conhecidas como Hotmart, Eduzz, Monetizze e Udemy?<br>
									Alavancar a venda de produtos físicos melhorando sua presença digital?<br>
									Se você disse sim para uma (ou todas) essas perguntas, então este curso é ideal!";
								break;
							case 'marketing':
								echo "
									<h2>Marketing Digital</h2>
									<img src='img/Ads.png' class='img-fluid send' alt='ADS Facebook e Google'><br><br>
									Uma das maiores dificuldades no início de qualquer empreendimento é a conquista dos clientes, mostrar o quanto sua ideia pode ser inovadora ou o quanto seu produto 
									pode ser útil e sua qualidade surpreendente.<br>
									Se você é um produtor de conteúdo digital (Youtuber por exemplo) este curso vai ajudar a alavancar seus vídeos e conquistar público. <br>
									Neste curso trabalhamos com o Marketing Direto, no qual os anúncios serão totalmente objetivos levando clientes (que estajam buscando por seu produto) até a sua 
									página de vendas, canal, loja virtual ou física e página do Facebook.<br>";
								break;				
							default:
								echo "Infelizmente não encontramos resposta para sua pesquisa, tente novamente usando as palavras chaves: office, negocios ou marketing.";
								break;
						}
					?>
					<br><br>
					<div class="send">
						<a href="index.html" class="btn btn-outline-primary">Voltar</a>
					</div>	
				</div>
			</div>	
		</section>
	
		<footer>
			<div class="rodape">
				<span>Programação web com PHP</span><br>
				<span>Todos os direitos reservados</span><br>
				<span>Desenvolvido por Fernando Coutinho</span>
			</div>
		</footer>

		<!-- Bootstrap JavaScript Libraries -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	
	</body>
</html>