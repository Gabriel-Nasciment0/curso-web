<?php include("config.php") ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilos/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/all.min.css">
    <title>Projeto 01</title>
</head>

<body>


    <header>
        <div class="center">


            <div class="logo left">Logomarca

            </div>
            <!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>Sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>Serviçoes">Serviçoes</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao_menu_mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>Sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>Serviçoes">Serviçoes</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
            <!--desktop-->
        </div>
        <!--center-->
    </header>



    <?php

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    if (file_exists('pages/' . $url . '.php')) {

        include('pages/' . $url . '.php');
    } else {
        // da pra fazer mt coisa aqui
        include('pages/404.php');
    }



    ?>







    <footer>
        <div class="center">

            <p>Todos os direitos reservados</p>
        </div>
        <!--center-->
    </footer>


    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js">

    </script>
</body>

</html>