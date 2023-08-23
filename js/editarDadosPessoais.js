/*-----===FORMATAR===-----*/
const cpf = document.getElementById("conta-cpf");
const rg = document.getElementById("conta-rg");

cpf.addEventListener("input", function(){
    const cpfNormal = cpf.value;
    const cpfFormatado = formatarCPF(cpfNormal);
    cpf.value = cpfFormatado;
});
rg.addEventListener("input", function(){
    const rgNormal = rg.value;
    const rgFormatado = formatarRG(rgNormal);
    rg.value = rgFormatado;
});

function formatarCPF(input){
    const apenasNumeros = input.replace(/\D/g, '').substr(0, 11); 
    const numerosPontos = apenasNumeros.replace(/^(\d{3})(\d{3})(\d{3})/, '$1.$2.$3');
    const numerosPontosHifen = numerosPontos.replace(/(\d{2})$/, '-$1');
    return numerosPontosHifen;
}
function formatarRG(input){
    const apenasNumeros = input.replace(/\D/g, '').substr(0, 9);
    const numerosPontos = apenasNumeros.replace(/^(\d{2})(\d{3})(\d{3})/, '$1.$2.$3');
    const numerosPontosHifen = numerosPontos.replace(/(\d{1})$/, '-$1');
    return numerosPontosHifen;
}

/*-----===UPDATE===-----*/
const btnsEditar = document.querySelectorAll(".btn-editar-dados-pessoais");

btnsEditar.forEach(btn => {
    btn.addEventListener("click", function () {
        const idCliente = this.getAttribute("id");
        const campoMudar = this.getAttribute("dado");
        const editado = btn.previousElementSibling.value;

        console.log(editado);
        
        const url = `/src/Controller/conta/updateContaDadosPessoaisController.php?id=${encodeURIComponent(idCliente)}&dado=${encodeURIComponent(campoMudar)}&editado=${encodeURIComponent(editado)}`;
        
        fetch(url, {
            method: "POST"
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.reload(true);
            } else {
                window.location.reload(true);
                console.log(data.message);
            }
        });
    });
});