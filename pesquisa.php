<?php include 'conexao.php' ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de Busca sem Refresh</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISTEMA DE BUSCA COM BANCO DE DADOS PHP</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>		
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>
	</head>
	<body>
		<div class="container">




<!-- Modal -->

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quer saber sobre estabelicimentos com acessiibilidade garantida? Pesquise aqui.</h5>
        
          </div>

          <div class="modal-body" >
		<form method="POST" id="form-pesquisa" action="">




			<div class="form-group select-group">
		
		<select name="categoria" class="browser-default custom-select">
					
					<option value="">Categoria</option>
					
						<?php
							$getcategoria = "SELECT * FROM categoria_acesso";
							$getcategoriaquery = mysqli_query($conn, $getcategoria);
						  while ($dados = mysqli_fetch_assoc($getcategoriaquery)) {
							
						$categoria = $dados ["categoria"];
						$categoria_id = $dados ["categoria_id"];
							

							echo "<option value='$categoria_id'>$categoria</option>";
 						}

					?>

				</select>
			</div>






				<div class="form-group input-group">
			 <input class="form-control" type="text" required="" name="pesquisa" id="pesquisa" placeholder="O que você está procurando?">
				</div>
			<input class="btn btn-primary btn-block" type="submit" name="enviar" value="Pesquisar">
		</form>

		<ul class="resultado">
		
		</ul>
		 </div>
     
    </div>

    
  </div>
</div>
		
	</body>
</html>