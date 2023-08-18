function leiaMais() {
    var pontos = document.getElementById("pontos");
    var maisTexto = document.getElementById("mais");
    var btnLeiaMais = document.getElementById("btnLeiaMais");

    if (pontos.style.display === "none") {
        pontos.style.display = "inline";
        maisTexto.style.display = "none";
        btnLeiaMais.innerHTML = "Leia Mais";
    } else {
        pontos.style.display = "none";
        maisTexto.style.display = "inline";
        btnLeiaMais.innerHTML = "Leia Menos";
    }
}/*---local do script do botão leia Mais, onde quando o usuario clicar no botão, o texto irá se expandir, falta uma trasição suave para baixo para acabar---*/

function scrollToTop(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Ativa a rolagem suave
      });
    }

    // Mostra o botão de rolagem ao rolar a página
    window.onscroll = function() {
      var scrollButton = document.querySelector('.scroll-top-button');
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButton.style.display = 'null';
      } else {
        scrollButton.style.display = 'none';
      }
}