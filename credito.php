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
						$nome = $_POST["nome"];
						$renda = $_POST["renda"];
						echo "Olá $nome muito obrigado por seu contato.<br>";
						if ($renda>=2000) {
							echo "Parabéns seu Crédito está <strong>Aprovado!</strong>";
						}elseif ($renda<2000) {
							echo "Infelizmente neste momento não poderemos conceder Crédito, clique em voltar para acessar a página principal.";
						}
					?>
					<br><br>
					<a href="index.html" class="btn btn-outline-primary">Voltar</a>		
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