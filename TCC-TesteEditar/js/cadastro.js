var input_nome_completo = document.querySelector('#nome_completo');
var input_nome_empresa = document.querySelector('#nome_empresa');
var input_email = document.querySelector('#email');
var input_cpf = document.querySelector('#cpf');
var input_senha = document.querySelector('#senha');


function cadastro(){

    let nome_completo = input_nome_completo.value;
    let nome_empresa = input_nome_empresa.value;
    let email = input_email.value;
    let cpf = input_cpf.value
    let senha = input_senha.value;

    console.log(nome_completo);
    console.log(nome_empresa);
    console.log(email);
    console.log(cpf);
    console.log(senha);
}