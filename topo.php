<!DOCTYPE html>
<html lang="pt-br">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">


	<title>Guia de Turismoo e Acessibilidade</title>

	<!-- CSS DO TOPO--->
	<link rel="stylesheet" type="text/css" href="css/topo.css">

		<!---SCRIPT DO FONTAWESOME-->
	<script src="https://kit.fontawesome.com/cb32e43272.js" crossorigin="anonymous">
		
	</script>
		<!-- SCRIPT DA FONTE PRINCIPAL DO SITE/LATO-->
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


		<!--ICONE MOSTRADO NO NAVEGADOR-->
	<link rel="icon" href="img/icon.png">


</head>

<body>



	<!--INICIO/REFERENTE A COMPONENTES DO TOPO-->
	<header class="topo">
		<a href="index.php"><h1 class="logo">Guia de Turismoo e Acessibilidade</h1></a>
		<button class="btn-menu"><i class="fas fa-bars fa-lg "></i></button>
		<nav class="menu">
			<a class="btn-fechar"><i class="fa fa-times"></i></a>
			<ul>
				<li><a href="?pag=projeto">MAPA</a></li>
				<li><a href="?pag=pontos">PONTOS TURISTICOS</a></li>
				<li><a href="">TURISMO</a></li>
				<li><a href="">
        
        <a href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">ALTO CONTRASTE</a></li>
    </a></li>
				<li><a href="?pag=contato">CONTATO</a></li>
			</ul>
		</nav>
	</header>

	<!--FIM/REFERENTE A COMPONENTES DO TOPO-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script >
		$(".btn-menu").click(function(){$(".menu").show();});
		$(".btn-fechar").click(function(){$(".menu").hide();});

		
	</script>
</body>
</html>