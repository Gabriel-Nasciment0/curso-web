$(function () {
    $("nav.mobile").click(function () {
        var listaMenu = $("nav.mobile ul");
        // abrir menu com fade in
        // if (listaMenu.is(":hidden") == true) {
        //     listaMenu.fadeIn();
        // } else {
        //     listaMenu.fadeOut();
        // }
        // abrir menu com slide toggle

        // if (listaMenu.is(":hidden") == true) {
        //     listaMenu.css("display", "block");
        // } else {
        //     listaMenu.css("display", "none");
        // }
        if (listaMenu.is(":hidden") == true) {
            var icone = $(".botao_menu_mobile").find("i");
            icone.removeClass("fa-solid fa-bars");
            icone.addClass("fa-solid fa-x");
            listaMenu.slideToggle();
        } else {
            var icone = $(".botao_menu_mobile").find("i");

            icone.removeClass("fa-solid fa-x");
            icone.addClass("fa-solid fa-bars");
            listaMenu.slideToggle();
        }
    });
    if ($("target").lenght > 0) {
        var elemento = "#" + $("target").attr("target");
        alert(elemento);
    }
});
