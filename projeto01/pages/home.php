<section class="banner-container">
    <div style="background-image: url('<?php INCLUDE_PATH; ?>images/slide01.jpg');" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php INCLUDE_PATH; ?>images/slide02.jpg');" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php INCLUDE_PATH; ?>images/slide03.jpg');" class="banner-single"></div><!--banner-single-->


    <div class="overlay"></div>
    <div class="center">
        <?php
        //prescisa de uma hospedagem
        if (isset($_POST['acao'])) {
            //foi enviado
            if ($_POST['email'] != '') {
                $email = $_POST['email'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email = new Email();
                } else {
                    echo '<script>alert("Campo invalido") </script>';
                }
            } else {
                echo '<script>alert("Campo vazio") </script>';
            }
        }
        ?>
        <form method="post">
            <h2>Qual o seu e-mail</h2>
            <input type="email" name="email" required>
            <input type="submit" name="acao" value="Cadastrar">
        </form>
    </div><!--center-->
    <div class="bullets">


    </div><!--bullets-->
</section><!--banner-principal-->

<section class="descricao-autor">
    <div class="center">

        <div class="w50 left">
            <h2>Gabriel Nasciment0</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto blanditiis ratione odio perspiciatis molestias totam animi harum rerum sequi quae, a, vitae est aspernatur voluptas quos, eos eligendi facilis repudiandae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati aut officia architecto alias esse, facere blanditiis, fuga ducimus repellendus molestias voluptatibus aliquam porro, iste commodi corporis facilis ea accusamus!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto blanditiis ratione odio perspiciatis molestias totam animi harum rerum sequi quae, a, vitae est aspernatur voluptas quos, eos eligendi facilis repudiandae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati aut officia architecto alias esse, facere blanditiis, fuga ducimus repellendus molestias voluptatibus aliquam porro, iste commodi corporis facilis ea accusamus!</p>

        </div><!--w50-->
    </div><!--center-->
    <div class="w50 left">

        <img class="right" src="<?php INCLUDE_PATH; ?>images/foto.jpg">
    </div><!--w50-->
    <div class="clear"></div>
</section><!--descricao-autor-->

<section class="especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class=" w33 left box-especialidade">
            <h3><i class="fa-brands fa-css3"></i></h3>
            <h4>CSS3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laborum similique obcaecati ipsam fugit omnis adipisci explicabo debitis et perspiciatis, veritatis amet, facilis fugiat id excepturi, impedit nobis eligendi? Fugit?</p>
        </div><!--box-especialidade-->
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-html5"></i></h3>
            <h4>HTML5</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laborum similique obcaecati ipsam fugit omnis adipisci explicabo debitis et perspiciatis, veritatis amet, facilis fugiat id excepturi, impedit nobis eligendi? Fugit?</p>
        </div><!--box-especialidade-->
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-js"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laborum similique obcaecati ipsam fugit omnis adipisci explicabo debitis et perspiciatis, veritatis amet, facilis fugiat id excepturi, impedit nobis eligendi? Fugit?</p>
        </div><!--box-especialidade-->
        <div class="clear"></div>
    </div><!--center-->
</section><!--especialidades-->

<section class="extras">
    <div class="center">
        <div id="depoimentos" class="w50 left depoimentos-container">

            <h2 class="title">Depoimentos dos nossos clientes</h2>
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero culpa aliquam quod laudantium qui sit explicabo earum expedita repellendus optio blanditiis dignissimos, inventore, omnis repellat molestiae magnam tenetur quam reiciendis.</p>
                <p class="nome-autor">lorem ipsum</p>
            </div><!--depoimento-single-->
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero culpa aliquam quod laudantium qui sit explicabo earum expedita repellendus optio blanditiis dignissimos, inventore, omnis repellat molestiae magnam tenetur quam reiciendis.</p>
                <p class="nome-autor">lorem ipsum</p>
            </div><!--depoimento-single-->
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero culpa aliquam quod laudantium qui sit explicabo earum expedita repellendus optio blanditiis dignissimos, inventore, omnis repellat molestiae magnam tenetur quam reiciendis.</p>
                <p class="nome-autor">lorem ipsum</p>
            </div><!--depoimento-single-->
        </div><!--w50-->
        <div id="servicos" class="w50 left servicos-container">

            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laboriosam iure, provident repudiandae dolorem minus sequi necessitatibus asperiores quis maxime officia at quos error eveniet sit aperiam facilis aliquid eaque!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laboriosam iure, provident repudiandae dolorem minus sequi necessitatibus asperiores quis maxime officia at quos error eveniet sit aperiam facilis aliquid eaque!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laboriosam iure, provident repudiandae dolorem minus sequi necessitatibus asperiores quis maxime officia at quos error eveniet sit aperiam facilis aliquid eaque!</li>
                </ul>
            </div><!--servicos-->
        </div><!--w50-->
        <div class="clear"></div>
    </div><!--center-->
</section><!--extras-->