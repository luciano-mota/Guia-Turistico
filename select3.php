<?php include_once("conexao2.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisar</title>
		<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>






<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		

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


		<form action="" method="POST">        
			<label>Categoria:</label>

			<div class="form-group select-group">
			<select name="id_categoria" id="id_categoria" class="browser-default custom-select">
				<option value="">Escolha a Categoria</option>
				<?php
					$result_cat = "SELECT * FROM categoria ORDER BY nome";
					$resultado_cat = mysqli_query($conn, $result_cat);
					while($row_cat = mysqli_fetch_assoc($resultado_cat) ) {
						echo '<option value="'.$row_cat['id'].'">'.$row_cat['nome'].'</option>';
					}
				?>
			</select>
</div>
			<br><br>
			
			<label>Subcategoria:</label>
			<span class="carregando">Aguarde, carregando...</span>
			<select name="id_sub_categoria" id="id_sub_categoria" class="browser-default custom-select">
				<option value="">Escolha a Subcategoria</option>
			</select><br><br>
			
			<input type="submit" value="Pesquisar" class="btn btn-primary btn-block">
			
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

			 </div>
     
    </div>

    
  </div>
</div>

	</body>
</html>
