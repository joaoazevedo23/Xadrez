<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Manual css-->
    <link href="css/style.css" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--Aba
    <link rel="shortcut icon" href="img/ico.png">
    -->
    <!--Datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
     <title>Cadastros de Xadrez</title>
</head>

<body class="tint-color">
    <header>
        <?php if (isset($_SESSION['login'])) {
            echo '
            <div class="collapse" id="navbarToggleExternalContent">
                
                <div class="tint-color2 p-4">
                    <h5 class="text-white h4">Cadastros de Xadrez <span class="text-muted">Official</span></h5>
                    <div>
                        <a href="?pagina=inicial" class="linkMenu">
                            Home
                        </a>
                    </div>
                    <div>
                        <a href="?pagina=cadastros" class="linkMenu">
                            Cadastros
                        </a>
                    </div>
                    <div>
                        <!--<a href="?pagina=faixas" class="linkMenu">
                            Faixas
                        </a>-->
                    </div>
                    <div>
                        <a href="logout.php" class="linkMenu">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark tint-color2">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            ';
        }
        ?>
    </header>

<style>
    
.tint-color {
    background-color: #EBDDCC;
}
.tint-color2 {
    background-color: #69923e;
}
a {
    color: white; 
    text-decoration: none; 
}

a:hover {
    color: #EBDDCC;
    text-decoration: none; 
}

</style>