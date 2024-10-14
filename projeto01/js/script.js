$(function () {
    $(".botao-menu-mobile").click(function () {
        var listaMenu = $("nav.mobile ul");
        listaMenu.slideToggle();
    });
});
