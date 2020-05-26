


 <?php 

    include("menu.php");
?>
<center>
<div class="conteudo">
    

    <form action="escrever.php" method="POST" enctype="multipart/form-data">
        <div>
            <div style="display:block;text-align:center;margin-top:5%;">

                <label>Escreva aqui o que deseja escrever no arquivo: </label> <br><br>
    
                <textarea name="texto" id="texto" cols="30" rows="10" class="estilotextarea"></textarea>  <br><br>
                <label>Selecione o arquivo: </label>
                <label for="arquivo2"> <span class="btn">Abrir Arquivo</span></label>
                <input style="visibility: hidden; position: absolute;" id="arquivo2" type="file"name="arquivo2" accept=".txt" >
                <br><br>
                <input type="reset" value="Limpar" class="button" >
                <input type="submit" value="Escrever" class="button" >

            </div>
            
           
        </div>
       
        <br>
        
            <span id="inputFileValue2">[Arquivo não selecionado]</span>

<script>
    var inputFile = document.getElementById('arquivo2');
    inputFile.onchange = function() {
        document.getElementById('inputFileValue2').innerHTML = this.value;
    };
</script>
 </form>


</div>
</center>
<?php 
    include("rodape.php");

?>