<div class="caixa">
    <!--Login-->
    <form method="post" action="login.php">
        <h3>Cadastro de Partidas de Xadrez</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" class="form-control" name="usu_login" placeholder="Digite seu login">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="usu_senha" placeholder="Digite sua senha">
        </div>
        <br>
        <button type="submit" class="btn tint-color2" style="color: white;">Entrar</button>
        <br><br>
    </form>
    <!--Fim Login-->
    <?php
        if (isset($_GET['erroLogin'])) {
            echo '
                <div id="erroLogin" class="alert alert-danger" role="alert">
                    Erro! Tente novamente.
                </div>
            ';
        }
    ?>

<style>
    .caixa {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); 
    }
</style>
</div>