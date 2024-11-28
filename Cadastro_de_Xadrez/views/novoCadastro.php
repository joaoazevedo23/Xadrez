<br>
<div class="caixa">
    <h4>Novo Cadastro</h4>
    <br>
    <!--Botão Voltar-->
    <a type="button" class="btn tint-color2" style="color: white;" href="?pagina=cadastros">
        <i class="bi bi-backspace"></i> Voltar
    </a>
    <br><br><br> 
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Ganhador</label>
            <input type="text" class="form-control" id="ganhador" name="ganhador" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Perdedor</label>
            <input type="text" class="form-control" id="perdedor" name="perdedor" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Data</label>
            <input type="text" class="form-control" id="data_partida" name="data_partida">
        </div>
        <!--Botão Cadastrarr-->
        <button type="submit" class="btn tint-color2" style="color: white;">Cadastrar</button>
    </form>  
    
    <style>
    
    .tint-color2 {
        background-color: #69923e;
    }
    
    </style>

</div>
<br><br>