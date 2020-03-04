var fechado = false;

function fecharMenuAdmin() {
    var larguraTela = window.innerWidth;

    if (fechado == false) {
        if (larguraTela > 680) {
            $("#sidebar").css("width", "65px");

            $(".icon-menu").css("width", "22px");
            $(".icon-menu").css("height", "22px");
            $(".icon-d-menu").css("width", "42px");
            $(".icon-d-menu").css("height", "42px");
            $(".form-v10-content").css("width", "94%");
            $(".menu-admin").css("display", "none");
            $(".seta-menu").css("transform", "rotate(177deg)");

            fechado = true;
        }
    } else {
        if (larguraTela > 680) {
            $("#sidebar").css("width", "19%");

            $(".icon-menu").css("width", "14px");
            $(".icon-menu").css("height", "14px");
            $(".icon-menu").css("display", "inline");
            $(".icon-d-menu").css("width", "60px");
            $(".icon-d-menu").css("height", "60px");
            $(".form-v10-content").css("width", "77%");
            $(".menu-admin").css("display", "inline");
            $(".seta-menu").css("transform", "rotate(0deg)");
            fechado = false;
        }
    }
}