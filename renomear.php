<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">



<?php 

	$arquivo = $_FILES['arquivo5']['name'];
	$nomeArq =  $_POST['texto'];

	$ArqOrigem = $arquivo;
	$ArqDestino = "C:/xampp/Programas/Parcial02/".$nomeArq."txt";

	// Função rename - Copia um arquivo
	if(rename($ArqOrigem,$ArqDestino))
	{
		echo("Arquivo Renomeado c/Sucesso :-)");
	}
	else{
			echo("Arquivo Renomeado :-(");
		}

?>

	
</div>
</center>
<?php 
	include("rodape.php");

?>
