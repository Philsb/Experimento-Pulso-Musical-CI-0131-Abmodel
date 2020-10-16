// JavaScript source code
let btn_comenzar = document.getElementById('btn_comenzar');
let seccion_datos = document.getElementById('datos');

function mostrar_datos()
{
    seccion_datos.style.visibility = 'visible';
}

btn_comenzar.addEventListener('click', mostrar_datos);