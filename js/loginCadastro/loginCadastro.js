document.addEventListener("DOMContentLoaded", () => {
    //-----===VARIÁVEIS===-----//
    const cadastro = document.querySelector(".cadastro-container");
    const imagem = document.querySelector(".login-cadastro-img-container")
    const login = document.querySelector(".login-container");
    const praLogin = document.querySelector(".pra-login");
    const praCadastro = document.querySelector(".pra-cadastro");
    
    const loginForm = document.getElementById("form-login");
    const submitLogin = document.getElementById("submit-login");
    
    
    /*---=Trocar de Formulário=---*/
    praCadastro.addEventListener("click", () => {
        cadastro.style.transform = "translateX(-50%)";
        imagem.style.transform = "translateX(50%)";
        login.style.transform = "translateX(151%)";
    });
    praLogin.addEventListener("click", () => {
        cadastro.style.transform = "translateX(-151%)";
        imagem.style.transform = "translateX(-50%)";
        login.style.transform = "translateX(50%)";
    });
    
    
    /*---=Checar Login=---*/
    loginForm.addEventListener("submit", async function(event) {
        
    });
});