<br>

<div class="caixa">
    <h4>Cadastros de partidas de Xadrez</h4>
    <br>
    <a type="button" class="btn tint-color2" style="color: white;" href="?pagina=novoCadastro">
        <i class="bi bi-plus"></i> Cadastrar Partidas
    </a>
    <br><br><br>
    <div>
        
        <table id="table_id" class="table table-light table-striped-columns">
            <thead>
                
                <tr>
                    <th>Quem Ganhou?</th>
                    <th>Quem Perdeu?</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastro)) {
                    echo '<tr><td style="word-wrap: break-word">' . $linha['ganhador'] . '</td>';
                    echo '<td style="word-wrap: break-word">' . $linha['perdedor'] . '</td>';
                    echo '<td style="word-wrap: break-word">' . $linha['data_partida'] . '</td>';
                    echo '<td> 

                    <div class="row">

                        <div class="col-6">
                            <form method="post" action="?pagina=editaCadastro">
                                <input type="hidden" name="id" value="' . $linha['id'] . '">
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                        </div>

                        <div class="col-6">
                            <form method="post" action="deletaCadastro.php">
                                <input type="hidden" name="id" value="' . $linha['id'] . '">
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: red">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>

                    </div>

                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>