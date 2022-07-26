var montoPrestamo = document.getElementById('montoPrestamo');
var plan1 = document.getElementById('plan1');
var plan2 = document.getElementById('plan2');
var plan3 = document.getElementById('plan3');

var montoPrestamoF = document.getElementById('montoPrestamoF');
var montoSeguroF = document.getElementById('montoSeguroF');
var montoRecibidoF = document.getElementById('montoRecibidoF');
var interesCalculadoF = document.getElementById('interesCalculadoF');
var cuotasPrestamoF = document.getElementById('cuotasPrestamoF');
var montoCuotaF = document.getElementById('montoCuotaF');
var montoTotalPagoF = document.getElementById('montoTotalPagoF');
var idUsuarioF = document.getElementById('idUsuarioF');

var usuario = document.getElementById('usuario');
let us = usuario.value;
var mostrarCalculoPrestaciones = document.getElementById('mostrarCalculoPrestaciones');
let plan;
let monto;
let montoRecibido;
let total;
let interes;
let totalCuotas;

let mpf;
let msf;
let mrf;
let icf;
let cpf;
let mcf;
let mtpf;


let arrayTasaGlobal = [{id: 1,dias: 360,tasaInteres: 0.26,meses: 12},
                        {id: 2,dias: 540, tasaInteres: 0.28,meses: 18},
                        {id: 3,dias: 720,tasaInteres: 0.3,meses: 24},
                        {id: 4,dias: 1080,tasaInteres: 0.32,meses: 36}];

plan1.addEventListener('click',function(){
    plan = arrayTasaGlobal.find(item => item.id == 1);
    setMonto(montoPrestamo);
});
plan2.addEventListener('click',function(){
    plan = arrayTasaGlobal.find(item => item.id == 2);
    setMonto(montoPrestamo);
});
plan3.addEventListener('click',function(){
    plan = arrayTasaGlobal.find(item => item.id == 3);
    setMonto(montoPrestamo);
});
plan4.addEventListener('click',function(){
    plan = arrayTasaGlobal.find(item => item.id == 4);
    setMonto(montoPrestamo);
});

function mostrarCalculo(){
    calculoInteres();
    seguro = calculoSeguro();
    montoRecibido = monto - seguro;

    montoPrestamoF.setAttribute('value', round(monto));
    montoSeguroF.setAttribute('value', round(seguro));
    montoRecibidoF.setAttribute('value', round(montoRecibido));
    interesCalculadoF.setAttribute('value', round(interes));
    cuotasPrestamoF.setAttribute('value', plan.meses);
    montoCuotaF.setAttribute('value', round(totalCuotas));
    montoTotalPagoF.setAttribute('value',round(total));
    idUsuarioF.setAttribute('value', parseInt(us));
}

function imprimir(){
    calculoInteres();
    seguro = calculoSeguro();
    montoRecibido = monto - seguro;

    montoPrestamoF.setAttribute('value', round(monto));
    console.log(montoPrestamoF = montoPrestamoF.value);
    montoSeguroF.setAttribute('value', round(seguro));
    montoRecibidoF.setAttribute('value', round(montoRecibido));
    interesCalculadoF.setAttribute('value', round(interes));
    cuotasPrestamoF.setAttribute('value', plan.meses);
    montoCuotaF.setAttribute('value', round(totalCuotas));
    montoTotalPagoF.setAttribute('value',round(total));
    idUsuarioF.setAttribute('value', parseInt(us));
    console.log(montoPrestamoF);
    console.log(montoSeguroF);
    console.log(montoRecibidoF);
    console.log(interesCalculadoF);
    console.log(cuotasPrestamoF);
    console.log(montoCuotaF);
    console.log(montoTotalPagoF);
    console.log(idUsuarioF);
}

function calculoSeguro(){
    var montoSeguro;
    montoSeguro = monto * 0.03;
    return montoSeguro;
}

function calculoInteres(){
    interes = monto * plan.tasaInteres * ((plan.dias)/360);
    total = interes + monto;
    totalCuotas = total / plan.meses;
}

function setMonto(montoPrestamo){
    var m = montoPrestamo.value;
    monto = parseFloat(m);
}

function round(num) {
    var m = Number((Math.abs(num) * 100).toPrecision(15));
    return Math.round(m) / 100 * Math.sign(num);
}
