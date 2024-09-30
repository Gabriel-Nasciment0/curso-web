<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GabsZone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="box">
        <section class="banner">
            <div class="overlay"></div>
            <div class="container chamada-banner">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h2> <?php echo htmlentities('<'); ?>GabsZone<?php echo htmlentities('>'); ?></h2>
                        <p>Empresa voltada para o desenvolvimento web e marqueting digital</p>
                        <a href="#">Saiba mais</a>
                    </div>
                    <!--col-md-->

                </div>
                <!--row-->
            </div>
            <!--container-->

        </section>
        <section class="cadastro-lead">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path
                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                            </svg>Entre na nossa lista!</h2>
                    </div>
                    <!--col-md-->
                    <div class="col-md-6">
                        <form method="post">
                            <input type="text" name="nome"><input class="btn btn-light" type="submit" value="Enviar">
                        </form>
                    </div>
                    <!--col-md-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </section>
        <section class="depoimentos text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Depoimento</h2>
                        <blockquote>
                            <p class="mb0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, odit.
                                Deserunt doloremque earum magni a maxime similique ullam nam minus dignissimos nostrum
                                exercitationem, laboriosam suscipit facere voluptatum perspiciatis repudiandae
                                voluptatem.</p>
                        </blockquote>
                    </div>
                    <!--col-md-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </section>
        <!--depoimentos-->
        <section class="diferenciais text-center">
            <h2>Conheça nossa empresa</h2>
            <div class="container diferenciais-container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-nvidia" viewBox="0 0 16 16">
                                <path
                                    d="M1.635 7.146S3.08 5.012 5.97 4.791v-.774C2.77 4.273 0 6.983 0 6.983s1.57 4.536 5.97 4.952v-.824c-3.23-.406-4.335-3.965-4.335-3.965M5.97 9.475v.753c-2.44-.435-3.118-2.972-3.118-2.972S4.023 5.958 5.97 5.747v.828h-.004c-1.021-.123-1.82.83-1.82.83s.448 1.607 1.824 2.07M6 2l-.03 2.017A7 7 0 0 1 6.252 4c3.637-.123 6.007 2.983 6.007 2.983s-2.722 3.31-5.557 3.31q-.39-.002-.732-.065v.883q.292.039.61.04c2.638 0 4.546-1.348 6.394-2.943.307.246 1.561.842 1.819 1.104-1.757 1.47-5.852 2.657-8.173 2.657a7 7 0 0 1-.65-.034V14H16l.03-12zm-.03 3.747v-.956a6 6 0 0 1 .282-.015c2.616-.082 4.332 2.248 4.332 2.248S8.73 9.598 6.743 9.598c-.286 0-.542-.046-.773-.123v-2.9c1.018.123 1.223.572 1.835 1.593L9.167 7.02s-.994-1.304-2.67-1.304a5 5 0 0 0-.527.031" />
                            </svg>
                        </h3>
                        <h2>diferenciais</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, aliquam explicabo placeat
                            repellat similique magnam soluta, ullam asperiores pariatur exercitationem cupiditate eius
                            necessitatibus deleniti sit qui autem dolor. Nostrum, nobis.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-amd" viewBox="0 0 16 16">
                                <path
                                    d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0zM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2z" />
                            </svg>

                        </h3>
                        <h2>diferenciais</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quasi sapiente enim saepe hic
                            totam ipsam officia quae cumque odio, nobis rerum nulla fuga tempore assumenda, esse, natus
                            magni explicabo.</p>

                    </div>
                    <div class="col-md-4">
                        <h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-joystick" viewBox="0 0 16 16">
                                <path
                                    d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2" />
                                <path
                                    d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23" />
                            </svg>
                        </h3>

                        <h2>diferenciais</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vero nostrum harum enim ad
                            laudantium, perspiciatis iste voluptates a laboriosam eos sit expedita natus tempore. Iusto
                            velit magni facere beatae?</p>
                    </div>
                </div>
                <!--row-->
            </div>
            <!--container-->
        </section>
        <!--diferenciais-->
        <section class="equipe">
            <h2>Equipe</h2>
            <div class="container equipe-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-pucture-child"></div>

                                    </div>
                                    <!--userpicture-->
                                </div>
                                <div class="col-md-10">
                                    <h3>Gabriel</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel eius culpa, quos
                                        quam hic consectetur dolores natus aut aperiam ullam accusantium suscipit eum
                                        dolorem maiores mollitia corporis similique. Soluta, optio!</p>
                                </div>
                            </div>
                        </div>
                        <!--equipe-single-->
                    </div>
                    <!--col-md-->
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-pucture-child"></div>

                                    </div>
                                    <!--userpicture-->
                                </div>
                                <div class="col-md-10">
                                    <h3>Gabriel</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel eius culpa, quos
                                        quam hic consectetur dolores natus aut aperiam ullam accusantium suscipit eum
                                        dolorem maiores mollitia corporis similique. Soluta, optio!</p>
                                </div>
                            </div>
                        </div>
                        <!--equipe-single-->
                    </div>
                    <!--col-md-->
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-pucture-child"></div>
                                    </div>
                                    <!--userpicture-->
                                </div>
                                <div class="col-md-10">
                                    <h3>Gabriel</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel eius culpa, quos
                                        quam hic consectetur dolores natus aut aperiam ullam accusantium suscipit eum
                                        dolorem maiores mollitia corporis similique. Soluta, optio!</p>
                                </div>
                            </div>
                        </div>
                        <!--equipe-single-->
                    </div>
                    <!--col-md-->
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-pucture-child"></div>

                                    </div>
                                    <!--userpicture-->
                                </div>
                                <div class="col-md-10">
                                    <h3>Gabriel</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel eius culpa, quos
                                        quam hic consectetur dolores natus aut aperiam ullam accusantium suscipit eum
                                        dolorem maiores mollitia corporis similique. Soluta, optio!</p>
                                </div>
                            </div>
                        </div>
                        <!--equipe-single-->
                    </div>
                    <!--col-md-->

                </div>
                <!--row-->
            </div>
            <!--equipe-container-->
        </section>
        <!--equipe-->





    </div>
    <!--box-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>