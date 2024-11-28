<?php

include 'db.php';

$ganhador = $_POST['ganhador'];
$perdedor = $_POST['perdedor'];
$data_partida = $_POST['data_partida'];

$query= "insert into cadastro(ganhador, perdedor, data_partida) 
values('$ganhador', '$perdedor','$data_partida')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');