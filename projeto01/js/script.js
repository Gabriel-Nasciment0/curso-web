$(function () {
    // botão do menu
    $(".botao-menu-mobile").click(function () {
        var listaMenu = $("nav.mobile ul");
        listaMenu.slideToggle();

        // Alternar entre ícone de menu e de fechar
        var icon = $(".botao-menu-mobile i");
        if (icon.hasClass("fa-bars")) {
            icon.removeClass("fa-bars").addClass("fa-x");
        } else {
            icon.removeClass("fa-x").addClass("fa-bars");
        }
    });
    //deslizando pro local desejado
    if ($("target").length > 0) {
        var elemento = "#" + $("target").attr("target");
        var divScroll = $(elemento).offset().top;
        $("html,body").animate({ scrollTop: divScroll }, 1500);
    }

    //navegar sem atualizar
    carregarDinamico();
    function carregarDinamico() {
        $("[realtime]").click(function () {
            var pagina = $(this).attr("realtime");
            $(".container-principal").load(
                INCLUDE_PATH + "pages/" + pagina + ".php"
            );
            return false;
        });
    }
    // carregamento expecialidades dinamico
    var atual = -1;
    var maximo = $(".box-especialidade").length - 1;
    var animacaoDeley = 2;
    var timer;

    executarAnimacao();
    function executarAnimacao() {
        $(".box-especialidade").hide();
        timer = setInterval(logicaAnimacao, animacaoDeley * 1000);
        function logicaAnimacao() {
            atual++;
            if (atual > maximo) {
                clearInterval(timer);
                return false;
            }
            $(".box-especialidade").eq(atual).fadeIn();
        }
    }
});
