//-----===VARIÁVEIS===-----//
const cadastro = document.querySelector(".cadastro-container");
const login = document.querySelector(".login-container");
const praLogin = document.querySelector(".pra-login");
const praCadastro = document.querySelector(".pra-cadastro");

const loginForm = document.getElementById("form-login");
const submitLogin = document.getElementById("submit-login");


/*---=Trocar de Formulário=---*/
praLogin.addEventListener("click", () => {
    cadastro.classList.remove("active");
    login.classList.remove("hidden");
});
praCadastro.addEventListener("click", () => {
    cadastro.classList.add("active");
    login.classList.add("hidden");
});


/*---=Checar Login=---*/
loginForm.addEventListener("submit", async function(event) {
    
});