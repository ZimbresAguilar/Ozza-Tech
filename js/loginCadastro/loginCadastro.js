
document.addEventListener("DOMContentLoaded", () => {
    //-----===VARIÁVEIS===-----//
    const cadastro = document.querySelector(".cadastro-container");
    const imagem = document.querySelector(".login-cadastro-img-container");
    const cadastroImg = document.querySelector(".cadastro-img-container");
    const loginImg = document.querySelector(".login-img-container");
    const login = document.querySelector(".login-container");
    const praLogin = document.querySelector(".pra-login");
    const praCadastro = document.querySelector(".pra-cadastro");

    const main = document.querySelector("main");
    
    const loginForm = document.getElementById("form-login");
    const submitLogin = document.getElementById("submit-login");
    
    
    /*---=Trocar de Formulário=---*/
    praCadastro.addEventListener("click", () => {
        cadastro.style.width = "60%";
        imagem.style.width = "40%";

        cadastro.style.transform = "translateX(-33%)";
        imagem.style.transform = "translateX(75%)";
        login.style.transform = "translateX(151%)";

        main.style.height = "100vh";

        cadastroImg.style.transform = "translateX(0)";
        loginImg.style.transform = "translateX(100%)";
    });
    praLogin.addEventListener("click", () => {
        cadastro.style.width = "50%";
        imagem.style.width = "50%";

        cadastro.style.transform = "translateX(-151%)";
        imagem.style.transform = "translateX(-50%)";
        login.style.transform = "translateX(50%)";

        main.style.height = "70vh";

        cadastroImg.style.transform = "translateX(-100%)";
        loginImg.style.transform = "translateX(0)";
    });
    
    
    /*---=Checar Login=---*/
    loginForm.addEventListener("submit", async function(event) {
        
    });
});