<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/all.min.css">
    <link rel="stylesheet" href="<?php echo include PATH; ?> estilos/style.css">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviçoes</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao_menu_mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviçoes</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
            <!--desktop-->
        </div>
        <!--center-->
    </header>
    <section class="banner_principal">
        <div class="overlay"></div>
        <div class="center">
            <form action="">
                <h2>Qual seu melhor email</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>

        </div>
        <!--center-->
    </section>
    <!--banner-->
    <section class="descricao_autor">
        <div class="center">
            <div class="w50 left">

                <h2>Gabriel Nasciment0</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, facere sapiente aliquam dolore
                    blanditiis veritatis harum velit doloremque id at. Doloremque nulla blanditiis error nostrum
                    architecto nihil labore, a repellendus dicta voluptas tempore alias iure. Incidunt inventore ad
                    officia voluptatum quaerat ex eius, id dolores explicabo earum, labore quisquam, cupiditate
                    necessitatibus totam! Placeat, nostrum! Reiciendis quod quaerat dolor labore blanditiis officia
                    iusto at possimus laboriosam eveniet eum fugit placeat praesentium voluptatum dicta odio ipsa,
                    obcaecati ullam voluptate eius distinctio laborum cumque similique ipsam? Sapiente, quas sint ipsam
                    aliquam animi voluptas labore velit repudiandae autem nisi dolore natus ipsum molestiae aut.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, facere sapiente aliquam dolore
                    blanditiis veritatis harum velit doloremque id at. Doloremque nulla blanditiis error nostrum
                    architecto nihil labore, a repellendus dicta voluptas tempore alias iure. Incidunt inventore ad
                    officia voluptatum quaerat ex eius, id dolores explicabo earum, labore quisquam, cupiditate
                    necessitatibus totam! Placeat, nostrum! Reiciendis quod quaerat dolor labore blanditiis officia
                    iusto at possimus laboriosam eveniet eum fugit placeat praesentium voluptatum dicta odio ipsa,
                    obcaecati ullam voluptate eius distinctio laborum cumque similique ipsam? Sapiente, quas sint ipsam
                    aliquam animi voluptas labore velit repudiandae autem nisi dolore natus ipsum molestiae aut.</p>
            </div>
            <!--w50-->
            <div class="wd50 left">
                <!-- pegar imagem depois -->
                <img class="right" src="https://images.pexels.com/photos/18820290/pexels-photo-18820290/free-photo-of-natureza-floresta-selva-mata.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="">
            </div>
            <!--wd50-->

            <div class="clear"></div>
        </div>
        <!--center-->
    </section>
    <!--descricao-->
    <section class="especialidades">
        <div class="center">
            <h2 class="title">especialidades</h2>
            <div class="w33 left box_especialidade">
                <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                        <path d="M480 32l-64 368-223.3 80L0 400l19.6-94.8h82l-8 40.6L210 390.2l134.1-44.4 18.8-97.1H29.5l16-82h333.7l10.5-52.7H56.3l16.3-82H480z" />
                    </svg></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ab tenetur quas vitae perferendis itaque
                    in, tempora ut accusantium quibusdam voluptas cumque ipsum ipsa ducimus minima obcaecati soluta
                    deleniti. Facere.</p>
            </div>
            <!--especialidade-->
            <div class="w33 left box_especialidade">
                <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">

                        <path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z" />
                    </svg></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ab tenetur quas vitae perferendis itaque
                    in, tempora ut accusantium quibusdam voluptas cumque ipsum ipsa ducimus minima obcaecati soluta
                    deleniti. Facere.</p>
            </div>
            <!--especialidade-->
            <div class="w33 left box_especialidade">
                <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                        <path d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z" />
                    </svg></h3>
                <h3>JavaScript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ab tenetur quas vitae perferendis itaque
                    in, tempora ut accusantium quibusdam voluptas cumque ipsum ipsa ducimus minima obcaecati soluta
                    deleniti. Facere.</p>
            </div>
            <!--especialidade-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </section>
    <!--especialidades-->
    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos_container">
                <h2 class="title">Depoimentos dos clientes</h2>
                <div class="depoimento_single">
                    <p class="depoimento_descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro
                        voluptas commodi mollitia corporis voluptate ea molestias est consequatur reiciendis officia
                        incidunt et assumenda consequuntur dicta, excepturi autem tempora cupiditate eveniet.</p>
                    <p class="nome_autor">Lorem ipsum </p>
                </div>
                <!--single-->
                <div class="depoimento_single">
                    <p class="depoimento_descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro
                        voluptas commodi mollitia corporis voluptate ea molestias est consequatur reiciendis officia
                        incidunt et assumenda consequuntur dicta, excepturi autem tempora cupiditate eveniet.</p>
                    <p class="nome_autor">Lorem ipsum </p>
                </div>
                <!--single-->
                <div class="depoimento_single">
                    <p class="depoimento_descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro
                        voluptas commodi mollitia corporis voluptate ea molestias est consequatur reiciendis officia
                        incidunt et assumenda consequuntur dicta, excepturi autem tempora cupiditate eveniet.</p>
                    <p class="nome_autor">Lorem ipsum</p>
                </div>
                <!--single-->
            </div>
            <!--w50-->

            <div class="w50 left servicos_container">
                <h2 class="title">Serviçoes</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, officiis distinctio.
                            Tenetur magni ratione officia, unde dicta facere optio qui eveniet voluptatum beatae sit
                            eligendi? Reprehenderit inventore ducimus accusantium voluptate.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, officiis distinctio.
                            Tenetur magni ratione officia, unde dicta facere optio qui eveniet voluptatum beatae sit
                            eligendi? Reprehenderit inventore ducimus accusantium voluptate.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, officiis distinctio.
                            Tenetur magni ratione officia, unde dicta facere optio qui eveniet voluptatum beatae sit
                            eligendi? Reprehenderit inventore ducimus accusantium voluptate.</li>
                    </ul>
                </div>
                <!--servicos-->
            </div>
            <!--w50-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </section>
    <!--extras-->
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