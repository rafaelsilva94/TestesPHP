/*
   pare! => sem parametro, sem retorno
   pare: mãos ao alto! => com parâmetro e sem retorno 
   pare: qual o seu nome! => com parâmetro e com retorno
   
*/  

function calculaIMC(peso, altura) {
    var imc = peso / (altura**2);
    return imc;

function verificaIMC(imc){
    var situacao = null;

     if (imc < 18.5) {
    situacao = 'Magreza';
} else if (imc >= 18.5 && imc <= 24.9) {
    situacao = 'Normal';
} else if (imc > 24.9 && imc <= 30) {
    situacao = 'Sobrepeso';
} else {
    situacao = 'Obesidade';
}

return situacao;

}

function mostraPaciente( nomePaciente, pesoPaciente, alturaPaciente ) {
    var imc = calculaIMC(pesoPaciente, alturaPaciente);
    var situacao = verificaIMC(imc);

    var spanNome = document.getElementById("nome");     //<span id="nome"></span>
    spanNome.innerHTML = nomePaciente;
    
    var spanPeso = document.getElementById("peso");     //<span id="peso"></span>
    spanPeso.innerHTML = pesoPaciente;
    
    var spanAltura = document.getElementById("altura"); //<span id="altura"></span>
    spanAltura.innerHTML = alturaPaciente;
    
    var spanImc = document.getElementById("imc");      //<span id="imc"></span>
    spanImc.innerHTML = imc.toFixed(2);
    
    var spanSituacao = document.getElementById("situacao");      //<span id="situacao"></span>
    spanSituacao.innerHTML = situacao;    
}
