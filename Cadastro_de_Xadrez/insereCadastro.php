<?php

include 'db.php';

$ganhador = $_POST['ganhador'];
$data_partida = $_POST['data_partida'];

$query= "insert into cadastro(ganhador, data_partida) 
values('$ganhador', '$data_partida')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');