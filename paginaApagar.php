<?php 

	include("menu.php");
?>
<center>
<div class="conteudo">
	

	<form action="apagar.php" method="POST" enctype="multipart/form-data">
        <div>
            <div style="display:block;text-align:center;margin-top:5%;">
            	 <label>Selecione o arquivo: </label>
                <label for="arquivo4"> <span class="btn">Abrir Arquivo</span></label>
                <input style="visibility: hidden; position: absolute;" id="arquivo4" type="file"name="arquivo4" accept=".txt" >
                <br><br>
                <input type="submit" value="Apagar" class="button">

            </div>
            
           
        </div>
        
        <br>
        
            <span id="inputFileValue4">[Arquivo não selecionado]</span>

<script>
    var inputFile = document.getElementById('arquivo4');
    inputFile.onchange = function() {
        document.getElementById('inputFileValue4').innerHTML = this.value;
    };
</script>
</form>

</div>
</center>
<?php 
	include("rodape.php");

?>