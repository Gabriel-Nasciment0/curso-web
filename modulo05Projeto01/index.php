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
    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;

        case 'servicos':
            echo '<target target="servicos" />';

            break;
    }

    ?>

    <header>
        <div class="center">


            <div class="logo left">Logomarca

            </div>
            <!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao_menu_mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
            <!--desktop-->
        </div>
        <!--center-->
    </header>

    <div class="container_principal">


        <?php

        if (file_exists('pages/' . $url . '.php')) {

            include('pages/' . $url . '.php');
        } else {
            if ($url != 'depoimentos' && $url != 'servicos') {
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
        }


        new Email()


        ?>






    </div><!--container_principal-->

    <footer>
        <div class="center">

            <p>Todos os direitos reservados</p>
        </div>
        <!--center-->
    </footer>


    <script src="<?php echo INCLUDE_PATH; ?>js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
</body>

</html>