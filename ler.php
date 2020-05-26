<?php 
include("menu.php");

	
?>
<center>
<div class="conteudo">
	

		<?php 
			$arquivo = $_FILES['arquivo1'];		

			$fArq = fopen($arquivo['name'], "r");
			

					while (!feof($fArq)) {
						// Função fgets - Lê uma linha de um arquivo
						$buffer = fgets($fArq,4096);
						echo $buffer."<br>";
					}

					// Função fclose - Fecha um arquivo
					echo "Status: ".fclose($fArq);
			
					echo "<br><br>";
			
		?>

</div>
</center>
<?php 
	include("rodape.php");

?>