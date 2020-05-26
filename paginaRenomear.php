<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">
	

	<form action="renomear.php" method="POST" enctype="multipart/form-data">
        <div>
            <div style="display:block;text-align:center;margin-top:5%;">
            	 <label>Selecione o arquivo: </label>
                <label for="arquivo5"> <span class="btn">Abrir Arquivo</span></label>
                <input style="visibility: hidden; position: absolute;" id="arquivo5" type="file"name="arquivo5" accept=".txt" >
                <br><br>
                <label>Novo nome do arquivo: </label>
                <input type="text" name="texto" id="texto" class="estilotextarea">

                <br><br>
                <input type="submit" value="Renomear" class="button">

            </div>
            
           
        </div>
        
        <br>
        
            <span id="inputFileValue5">[Arquivo não selecionado]</span>

<script>
    var inputFile = document.getElementById('arquivo5');
    inputFile.onchange = function() {
        document.getElementById('inputFileValue5').innerHTML = this.value;
    };
</script>
</form>

</div>
</center>
<?php 
	include("rodape.php");

?>