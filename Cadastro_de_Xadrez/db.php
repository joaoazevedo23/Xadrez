<?php

//Local

$servidor = "localhost";
$usuario = "root";
$senha ="";
$db="bd_xadrez";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query="select * from cadastro order by ganhador";
$consultaCadastro= mysqli_query($conexao, $query);

/*$query="select * from faixas";
$consultaFaixas= mysqli_query($conexao, $query);*/

