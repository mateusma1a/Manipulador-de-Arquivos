


<?php 

    include("menu.php");
?>
<center>
<div class="conteudo">
    

    <form action="ler.php" method="POST" enctype="multipart/form-data">
        <div>
            <div style="display:block;text-align:center;margin-top:5%;">
                 <label>Selecione o arquivo: </label>
                <label for="arquivo1"> <span class="btn">Abrir Arquivo</span></label>
                <input style="visibility: hidden; position: absolute;" id="arquivo1" type="file"name="arquivo1" accept=".txt" >
                <br><br>
                <input type="submit" value="Ler" class="button">

            </div>
            
           
        </div>
        
        <br>
        
            <span id="inputFileValue1">[Arquivo não selecionado]</span>

<script>
    var inputFile = document.getElementById('arquivo1');
    inputFile.onchange = function() {
        document.getElementById('inputFileValue1').innerHTML = this.value;
    };
</script>
</form>


</div>
</center>
<?php 
    include("rodape.php");

?>