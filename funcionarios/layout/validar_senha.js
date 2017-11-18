function validar(){
    var senha1 = document.getElementById("senha").value;
    var senha2 = document.getElementById("confirma_senha").value;


    if (senha1 != senha2) {
        alert('Senhas não conferem');
        senha1.focus();
        return false;
    }
}