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
loginForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const loginEmail = document.getElementById("email-login").value;
    const loginSenha = document.getElementById("senha-login").value;

    const url = `/src/Controller/loginCadastro/loginController.php?email=${encodeURIComponent(loginEmail)}&senha=${encodeURIComponent(loginSenha)}`;

    fetch(url, {
        method: "POST"
    })
    .then(response => {response.json(); console.log(response)})
    .then(data => {
        if(data.success){
            setTimeout(function(){
                window.location.href = "/src/View/pages/viewConta.php";
            }, 750);
        }
        else{
            console.log(data.message);
        }
    })
    .catch(error => {
        console.error("Erro na requisição:", error);
    });
});