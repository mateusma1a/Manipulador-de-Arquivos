

<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">


	<?php 

		$arquivo = $_FILES['arquivo2'];
		$textoDoTextArea = $_POST['texto'];

		$fArq = fopen($arquivo['name'], "w");
			
					
				fwrite($fArq, $textoDoTextArea);		

				echo "Arquivo reescrito com sucesso!!!";

	?>

	
</div>
</center>

<?php 
	include("rodape.php");

?>
