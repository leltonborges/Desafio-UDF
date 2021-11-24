<?php
include_once 'config.php';

$path = @$_GET["page"];
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js" async></script>
    <?php
    if($path == "lista-produtos") echo "<script src=\"js/lista.js\" async ></script>";
    if($path == "cadastrar-produtos") echo "<script src=\"js/cadastrar.js\" async ></script>";
    ?>
    <title>Desafio</title>
</head>
<body>
<div class="container">
    <nav class="navbar is-primary">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <span class="icon-text">
                  <span class="icon">
                    <i class="fas fa-home"></i>
                  </span>
                  <span>Home</span>
                </span>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBurger">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBurger" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="?page=lista-produtos">
                    Todos
                </a>
                <a class="navbar-item" href="?page=cadastrar-produtos">
                    Cadastrar
                </a>
            </div>
        </div>
    </nav>
    <h1 class="title">Desafio</h1>
    <div class="container">
        <?php
        if ($path != null) {
            include("pages/$path.php");
        } else {
            include("pages/main.php");
        }
        ?>
    </div>
</div>

</body>

</html>
