<?php

include 'db.php';

$id=$_POST['id'];
$ganhador = $_POST['ganhador'];
$perdedor = $_POST['perdedor'];
$data_partida = $_POST['data_partida'];

$query= "update cadastro set ganhador='$ganhador', perdedor='$perdedor', data_partida='$data_partida' where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');