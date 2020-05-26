<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">
	

	<?php 

		$arquivo = $_FILES['arquivo4']['name'];
		

		$arquivo1 = __DIR__."//".$arquivo;
		// Nome do Arquivo
	
		echo $arquivo;
		// Função rename - Apaga um arquivo
		if(unlink($arquivo1))
		{
			echo("Arquivo Apagado c/Sucesso :-)");
		}
		else{
			echo("Arquivo não foi apagado :-(");
		}


	?>

</div>
</center>
<?php 
	include("rodape.php");

?>
