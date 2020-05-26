<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">
	<form action="copia.php" method="POST" enctype="multipart/form-data">
	<div class="quadro">
		
		
        <div>
            <div style="display:block;text-align:center;margin-top:5%;">
            	<label>Selecione o arquivo que deseja copiar: </label>
                <label for="arquivo3"> <span class="btn">Abrir Arquivo</span></label>
                <input style="visibility: hidden; position: absolute;" id="arquivo3" type="file"name="arquivo3" accept=".txt" >
                <br>
            </div>
            
           
        </div>
       
        <br>
        
            <span id="inputFileValue3">[Arquivo não selecionado]</span> <br>

<script>
    var inputFile = document.getElementById('arquivo3');
    inputFile.onchange = function() {
        document.getElementById('inputFileValue3').innerHTML = this.value;
    };
</script>

	</div>

	<div class="quadro1">
		
		
        <div>
            <div style="display:block;text-align:center;margin-top:5%;">
            	<label>Selecione o arquivo destino da copia: </label>
                <label for="arquivo6"> <span class="btn">Abrir Arquivo</span></label>
                <input style="visibility: hidden; position: absolute;" id="arquivo6" type="file"name="arquivo6" accept=".txt" >
                <br>
            </div>
            
           
        </div>
       
        <br>
        
            <span id="inputFileValue6">[Arquivo não selecionado]</span> <br>

<script>
    var inputFile = document.getElementById('arquivo6');
    inputFile.onchange = function() {
        document.getElementById('inputFileValue6').innerHTML = this.value;
    };
</script>

	</div>
	<br>
<input type="submit" value="Copiar" class="button">
 </form>


</div>
</center>
<?php 
	include("rodape.php");

?>