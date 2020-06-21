<?php $conexao = mysqli_connect('localhost', 'root', '');
					$banco = mysqli_select_db($conexao,'busca_categoria') ;	
					$sql = mysqli_query($conexao, "SELECT * FROM categoria_acesso") or die("Error");
?>
