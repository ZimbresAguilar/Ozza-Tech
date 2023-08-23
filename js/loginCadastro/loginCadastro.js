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
    event.preventDefault();

    const loginEmail = document.getElementById("email-login").value;
    const loginSenha = document.getElementById("senha-login").value;

    const url = `/src/Controller/loginCadastro/loginController.php`;

    const data = {
        email: loginEmail,
        senha: loginSenha
    };

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        });

        if (response.ok) {
            const responseData = await response.json();
            
            if (responseData.success) {
                setTimeout(function(){
                    window.location.href = "/src/View/pages/viewConta.php";
                }, 750);
            } else {
                console.log(responseData.message);
            }
        } else {
            console.error("Erro na requisição:", response.status, response.statusText);
        }
    } catch (error) {
        console.error("Erro na requisição:", error);
    }
});