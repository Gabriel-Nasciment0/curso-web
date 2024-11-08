<?php include('config.php'); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Projeto01</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO meta tags -->
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu site">
    <!-- Dependencias -->
    <link rel="stylesheet" href="<?php INCLUDE_PATH; ?> https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php INCLUDE_PATH; ?>estilo/all.min.css">
    <link rel="preconnect" href="<?php INCLUDE_PATH; ?> https://fonts.googleapis.com">
    <link rel="preconnect" href="<?php INCLUDE_PATH; ?> https://fonts.gstatic.com" crossorigin>
    <link href="<?php INCLUDE_PATH; ?> https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href=" <?php INCLUDE_PATH; ?> images/favicon.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href=" <?php INCLUDE_PATH; ?> estilo/style.css">
</head>

<body>
    <?php
    //prescisa de uma hospedagem
    //envio de email
    if (isset($_POST['acao']) && $_POST['identificador'] == 'form_home') {
        //foi enviado
        if ($_POST['email'] != '') {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mail = new Email(
                    'smtp.gmail.com',
                    'gabrielhenrique40042@gmail.com',
                    'b8xHFr5J@twt3EKKsP3kp!9$om4rJsdqnu&3uTHzrWZYN7FXeAe$BjGP*aPsC4THQzwJ&@^sy#Q8KVU$Hd#k$mDNRCV4v2sX^mvk',
                    'gabriel'
                );
                $mail->addAdress(
                    'gabrielhenrique4004@gmail.com',
                    'gabriel'
                );
                $mail->formatarEmail(array('assunto' => 'Novo email cadastrado', 'corpo' => $email));
                if ($mail->enviarEmail()) {
                    echo '<script>alert("Eviado") </script>';
                } else {
                    echo '<script>alert("Erro") </script>';
                }
            } else {
                echo '<script>alert("Campo invalido") </script>';
            }
        } else {
            echo '<script>alert("Campo vazio") </script>';
        }
    } else if (isset($_POST['acao']) && $_POST['identificador'] == 'form_contato') {
        //        $nome = $_POST['nome'];
        //      $email = $_POST['email'];
        //    $mensagem = $_POST['mensagem'];
        //  $telefone = $_POST['telefone'];
        $assunto = 'Nova mensagem do site';
        $corpo = '';
        foreach ($_POST as $key => $value) {
            $corpo .= ucfirst($key) . ":" . $value;
            $corpo .= "<hr>";
        }
        $info = array('assunto' => $assunto, 'corpo' => $corpo);
        $mail = new Email(
            'smtp.gmail.com',
            'gabrielhenrique40042@gmail.com',
            'b8xHFr5J@twt3EKKsP3kp!9$om4rJsdqnu&3uTHzrWZYN7FXeAe$BjGP*aPsC4THQzwJ&@^sy#Q8KVU$Hd#k$mDNRCV4v2sX^mvk',
            'gabriel'
        );
        $mail->addAdress(
            'gabrielhenrique4004@gmail.com',
            'gabriel'
        );
        $mail->formatarEmail($info);
        if ($mail->enviarEmail()) {
            echo '<script>alert("Eviado") </script>';
        } else {
            echo '<script>alert("Erro") </script>';
        }
    }
    ?>
    <base base="<?php echo INCLUDE_PATH; ?>">
    <?php
    //rolagem de tela
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;
        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }

    // mail PHPMailer
















    ?>
    <header>
        <div class="center">

            <div class="logo left">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php INCLUDE_PATH; ?>home">Home</a></li>
                    <li><a href="<?php INCLUDE_PATH; ?>depoimentos">depoimentos</a></li>
                    <li><a href="<?php INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime href="<?php INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php INCLUDE_PATH; ?>home">Home</a></li>
                    <li><a href="<?php INCLUDE_PATH; ?>depoimentos">depoimentos</a></li>
                    <li><a href="<?php INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime href="<?php INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    <div class="container-principal">
        <?php






        //validação de pagina
        if (file_exists('pages/' . $url . '.php')) {
            include('pages/' . $url . '.php');
        } else {
            if ($url != 'depoimentos' && $url != 'servicos') {

                $pagina404 = true;
                include('pages/err404.php');
            } else {
                include('pages/home.php');
            }
        }



















        ?>
    </div><!--container-principal-->
    <footer <?php if (isset($pagina404) && $pagina404 = true) echo 'class="fixed";' ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>

        </div><!--center-->
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php INCLUDE_PATH; ?>js/jquery-3.7.1.min.js"></script>
    <script src="<?php INCLUDE_PATH; ?> https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php INCLUDE_PATH; ?> https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="<?php INCLUDE_PATH; ?>js/script.js"></script>
    <?php if ($url == 'home' || $url == '') {  ?>
        <script src="<?php INCLUDE_PATH; ?>js/slider.js"></script>

    <?php }; ?>


</body>

</html>