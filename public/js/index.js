$(document).ready(function() {
    /* RESIDENCIAIS HOVER */

    $(".residencial-item").on("mouseover", function() {
        var html;
        $(this).css("box-shadow", "inset 0 0 1050px #000000");

        html = $(this).find(".residencial-desc");
        $(html).css("display", "block");
    });

    $(".residencial-item").on("mouseout", function() {
        $(".residencial-item").css("box-shadow", "inset 0 0 0px #000000");
        $(".residencial-desc").css("display", "none");
    });

    /* IMOVEIS HOVER */

    $(".col-imovel").on("mouseover", function() {
        var html;

        html = $(this).find(".imovel-foto-text");

        $(html).css("display", "block");
    });

    $(".col-imovel").on("mouseout", function() {
        $(".imovel-foto-text").css("display", "none");
    });
});