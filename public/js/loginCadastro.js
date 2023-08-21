//-----===VARIÁVEIS===-----//
const cadastro = document.querySelector(".cadastro-container");
const login = document.querySelector(".login-container");
const praLogin = document.querySelector(".pra-login");
const praCadastro = document.querySelector(".pra-cadastro");

praLogin.addEventListener("click", () => {
    cadastro.classList.remove("active");
    login.classList.remove("hidden");
});
praCadastro.addEventListener("click", () => {
    cadastro.classList.add("active");
    login.classList.add("hidden");
});