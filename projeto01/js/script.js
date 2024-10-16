$(function () {
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
});
