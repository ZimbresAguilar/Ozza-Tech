/*-----===VARIÁVEIS===-----*/
const cpf = document.getElementById("cpf-cadastro");
const rg = document.getElementById("rg-cadastro");

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

/*-----===FUNCTIONS===-----*/
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