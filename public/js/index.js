$(document).ready(function() {
    /* RESIDENCIAIS HOVER */
    /*
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

    */
    /* IMOVEIS HOVER */
    /*
                $(".col-imovel").on("mouseover", function() {
                    var html;

                    html = $(this).find(".imovel-foto-text");

                    $(html).css("opacity", "1");
                });

                $(".col-imovel").on("mouseout", function() {
                    $(".imovel-foto-text").css("opacity", "0");
                });

                */
});

var largura = 0;
var intervalo;

function overimoveis(e) {
    intervalo = setInterval(function() {
        var a = e.getElementsByClassName("linha-detalhes")[0];
        if (largura > 50) {
            window.clearInterval(intervalo);
        }
        largura = largura + 1;
        a.style.width = largura + "px";
    }, 10);
}

function outimoveis(e) {
    var a = e.getElementsByClassName("linha-detalhes")[0];
    a.style.largura = "0";
    largura = 0;
    window.clearInterval(intervalo);
}
