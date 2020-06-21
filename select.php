<?php include_once("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>

		
		<link rel="stylesheet" href="css/select.css">

<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}



		</style>

		

	</head>
	<body>
		
								<!-- INICIO DO SLIDER -->
			

		
		<header>

			<div class="img-banner">
			<div class="chamada"> <span style="color: #888890 ; font-weight:2000; font-size: 0.5em;">EXPLORE AQUI OS</br></span><span style="font-weight: bold;">PONTOS ACESSIVEIS TURISTICOS DE</br> SÃO LUIS </span><div class="borda"></div></div>
			
			<div class="chamada-coment">Veja abaixo as principais categorias dos Pontos<br> turísticos de São Luis. São passeios super legais<br> para se fazer na cidade e arredores
			</div>


		<div class="amarelo">
			
			<div class="qd1">

					<form action="" method="POST"> 
						<label>Categoria:</label>
						<select name="id_categoria" id="id_categoria" >

							<option value="">Escolha a Categoria</option>
				<?php
					$result_cat = "SELECT * FROM categoria ORDER BY nome";
					$resultado_cat = mysqli_query($conn, $result_cat);
					while($row_cat = mysqli_fetch_assoc($resultado_cat) ) {
						echo '<option value="'.$row_cat['id'].'">'.$row_cat['nome'].'</option>';
					}
				?>
			</select>


			<br><br>
			
			<label>Subcategoria:</label>
			<span class="carregando">Aguarde, carregando...</span>
			<select name="id_sub_categoria" id="id_sub_categoria"  >
				<option value="">Escolha a Subcategoria</option>
			</select><br><br>
			
			<input type="submit" value="Pesquisar" >
			
		</form>
<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$id_categoria = $_POST['id_categoria'];
				$id_sub_categoria = $_POST['id_sub_categoria'];
				
				$result_pesquisar = "SELECT endereco, nome FROM empresa WHERE categoria_id = '$id_categoria' AND subcategoria_id = '$id_sub_categoria'";
				
				$resultado_pesquisar = mysqli_query($conn, $result_pesquisar);
				
				while ($row_pesquisar = mysqli_fetch_assoc($resultado_pesquisar)){
					echo "Local/Estabelecimentos:<strong> ".$row_pesquisar['nome'] . "</strong><br>";
					echo "Endereço: ".$row_pesquisar['endereco'] . "<br><br>";
				}
				
			}
		?>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		
		<script type="text/javascript">
		$(function(){
			$('#id_categoria').change(function(){
				if( $(this).val() ) {
					$('#id_sub_categoria').hide();
					$('.carregando').show();
					$.getJSON('sub_categorias.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
						}	
						$('#id_sub_categoria').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>

			 </div><!--DIV FECHA QD1-->
		
	
</div><<!-- DIV FECHA AMARELO-->

</header>
		
	</body>
</html>
