<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">


	<?php 

		$arquivo1 = $_FILES['arquivo3']['name'];
		$arquivo2 = $_FILES['arquivo6']['name'];

		// Nome do Arquivo
	$ArqOrigem = $arquivo1;
	$ArqDestino = $arquivo2;

	// Função copy - Copia um arquivo
	if(copy($ArqOrigem,$ArqDestino))
	{
		echo("Arquivo Copiado c/Sucesso :-)");
	}
	else{
			echo("Arquivo Não Copiado :-(");
		}

	?>
	
</div>
</center>
<?php 
	include("rodape.php");

?>