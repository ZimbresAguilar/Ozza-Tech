/*-----===VARIÁVEIS===-----*/
/*Botão das abas*/
const dadosPessoaisBtn = document.querySelector(".dados-pessoais");
const segurancaBtn = document.querySelector(".seguranca");
const contaBtn = document.querySelector(".conta");
/*Abas*/
const dadosPessoais = document.querySelector(".exibicao-dados-pessoais");
const seguranca = document.querySelector(".exibicao-seguranca");
const conta = document.querySelector(".exibicao-conta");

/*-----===Functions===-----*/
dadosPessoaisBtn.addEventListener("click", () => {
    dadosPessoaisBtn.classList.add("active");
    segurancaBtn.classList.remove("active");
    contaBtn.classList.remove("active");

    dadosPessoais.classList.add("active");
    seguranca.classList.remove("active");
    conta.classList.remove("active");
});
segurancaBtn.addEventListener("click", () => {
    dadosPessoaisBtn.classList.remove("active");
    segurancaBtn.classList.add("active");
    contaBtn.classList.remove("active");

    dadosPessoais.classList.remove("active");
    seguranca.classList.add("active");
    conta.classList.remove("active");
});
contaBtn.addEventListener("click", () => {
    dadosPessoaisBtn.classList.remove("active");
    segurancaBtn.classList.remove("active");
    contaBtn.classList.add("active");

    dadosPessoais.classList.remove("active");
    seguranca.classList.remove("active");
    conta.classList.add("active");
});