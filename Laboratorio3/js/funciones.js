function Sumar(numeroUno, numeroDos){
    return numeroUno + numeroDos;
}

const valora = 31;
const valorb = 13;
const restado = Restar();

const resultado = Sumar(valora, valorb);
console.log(resultado);

function Restar(primerNumero = 2, segundoNumero = 1){
    return primerNumero - segundoNumero;
}
console.log(restado);

function Saludar(nombre, edad){
    console.log("Hola soy " + nombre + " tengo " + edad + " de edad.");
}
Saludar("pedro",12);