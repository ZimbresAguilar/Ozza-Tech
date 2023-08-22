/*-----===VARIÁVEIS===-----*/
const abrirModalExcluir = document.querySelector(".btn-exclusao-conta");
const modalExcluir = document.querySelector(".modal-exclusao");
const modalSair = document.querySelector(".modal-exit");
const excluirConta = document.querySelector(".modal-btn-exclusao-conta");

abrirModalExcluir.addEventListener("click", () => {
    modalExcluir.classList.toggle("hidden");
});
modalSair.addEventListener("click", () =>{
    modalExcluir.classList.toggle("hidden");
});

/*---=EXCLUIR A CONTA=---*/
excluirConta.addEventListener("click", function(){
    const idCliente = excluirConta.getAttribute("id");

    // Agora, vamos enviar uma solicitação para um arquivo PHP usando o método "fetch()". Isso é como dizer para o PHP: "Ei, quero excluir o item com o ID que te passei"
    //Precisamos passar o nome do arquivo PHP que vai receber a solicitação e também um pouco de informação, como o ID do item, usando o "?" e "id=". O método "DELETE" indica que estamos pedindo para o PHP excluir algo

    fetch("/src/Controller/conta/deletarContaController.php?id=" + idCliente, {
        method: "DELETE"
    }).then(response => response.json()).then(data => {
        if(data.success){
            window.location.href="/src/View/pages/viewLoginCadastro.php";
        }
        else{
            console.log(data.message);
        }
    });
});


/*-----===FUNÇÕES===-----*/