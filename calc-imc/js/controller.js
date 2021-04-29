var nome = "Renato Oliveira";
var peso = 76.00;
var altura = 1.78;
var imc = peso / (altura**2);

/* 1- passo
console.log(nome);
console.log(`Peso: ${peso} - Altura: ${altura}`);
console.log(`Calculo do IMC: ${imc.toFixed(2)}`);
*/

var situacao = null; //vazio

if (imc < 18.5) {
    situacao = 'Magreza';
} else if (imc >= 18.5 && imc <= 24.9) {
    situacao = 'Normal';
} else if (imc > 24.9 && imc <= 30) {
    situacao = 'Sobrepeso';
} else {
    situacao = 'Obesidade';
}



var spanNome = document.getElementById("nome");     //<span id="nome"></span>
spanNome.innerHTML = nome;

var spanPeso = document.getElementById("peso");     //<span id="peso"></span>
spanPeso.innerHTML = peso;

var spanAltura = document.getElementById("altura"); //<span id="altura"></span>
spanAltura.innerHTML = altura;

var spanImc = document.getElementById("imc");      //<span id="imc"></span>
spanImc.innerHTML = imc.toFixed(2);

var spanSituacao = document.getElementById("situacao");  //<span id="situacao"></span>
spanSituacao.innerHTML = situacao;
