<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">
	<?php 
	// Nome do Arquivo
	$nomeArq1 = "C:/xampp/Programas/Parcial02/Aluno4.txt";
	$nomeArq2 = "C:/xampp/Programas/Parcial02/Exercicio01.txt";

	// Função file - Lê o arquivo e retorna um array
	$conteudoArq = file($nomeArq1);


	//Função fopen - Abre um arquivo p/escrita
	$fArq = fopen($nomeArq2,"w");

	for($i=28; $i>=0 ; $i--) { 
		//Função fwrite - Grava uma string no arquivo
		fwrite($fArq,$conteudoArq[$i]."\n");			
	}
	

	$fArq = fopen($nomeArq2,"r");

	while (!feof($fArq)) {
		// Função fgets - Lê uma linha de um arquivo
		$buffer = fgets($fArq,4096);
		echo $buffer."<br>";
	}

	// Função fclose - Fecha um arquivo
	echo "Status: ".fclose($fArq);

	?>
</div>
</center>
<?php 
	include("rodape.php");

?>