
<?php include'conexao.php'?>;			

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

			
<?php 

$categoria = @$_POST ['categoria'];

$busca = @$_POST ['busca'];


/*------
 echo "$categoria";
 echo "<br/>";
 echo "$categoria_id";
----*/

?>
<?php

$getpaginas= "SELECT * FROM videoaulas where categoria_id= '$categoria' and videoaula LIKE '%".$busca."%' ";
$getpaginasquery= mysqli_query($conexao,$getpaginas) or die("ERRO NA CONEXAO!!");
$row = mysqli_num_rows($getpaginasquery);

if ($row > 0 ){

	while ($dados = mysqli_fetch_array($getpaginasquery)){

		$conteudo = $dados ["videoaula"];

		echo $conteudo;
	}

}
 ?>

</body>
</html>
