input_senha = document.getElementById('senha');
input_confirmar_senha = document.getElementById('confirmar_senha');
validacao_senha = document.getElementById('validacao');

function mostrarSenha(){
    
}

function guardarSenha(){
    senha_tmp = input_senha.value;
}

function confirmarSenha(){
    confirmar_senha = input_confirmar_senha.value;
   
    if(senha_tmp==confirmar_senha){
        msg = "Ok";
    }else{
        msg = "Senhas diferentes!";
    }

    validacao_senha.innerHTML = msg;
}