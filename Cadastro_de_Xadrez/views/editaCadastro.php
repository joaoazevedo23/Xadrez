<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastro)) {
    if ($linha['id'] == $_POST['id']) {
?>

<br>
<div class="caixa">
    <h4>Cadastro</h4>
    <br>
    <a type="button" class="btn tint-color2" style="color: white;" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id'] ?>" type="text" class="form-control" id="id" name="id" style="display:none;">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Ganhador</label>
            <input value="<?php echo $linha['ganhador'] ?>" type="text" class="form-control" id="ganhador" name="ganhador" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Perdedor</label>
            <input value="<?php echo $linha['perdedor'] ?>" type="text" class="form-control" id="perdedor" name="perdedor" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Data</label>
            <input value="<?php echo $linha['data_partida'] ?>" type="text" class="form-control" id="data_partida" name="data_partida">
        </div>
        <br>
        <button type="submit" class="btn tint-color2" style="color: white;">Salvar</button>
    </form>   

</div>
<br><br>

<?php
    }
}