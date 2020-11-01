// JavaScript source code
var timestart = 0;
var counter = 0
var countFlag = false;
var keyUpFlag = true;
var testTime = 15000;
var currentTest = 0;
let barra = document.getElementById('barra');
let tab_p1 = document.getElementById('p1-tab');
let tab_p2 = document.getElementById('p2-tab');
let tab_p3 = document.getElementById('p3-tab');
let tab_p4 = document.getElementById('p4-tab');
let tab_final = document.getElementById('final-tab');
let prueba1 = document.getElementById('prueba1');
let prueba2= document.getElementById('prueba2');
let prueba3 = document.getElementById('prueba3');
let prueba4 = document.getElementById('prueba4');
let final = document.getElementById('final');
let btn_continuar_p1 = document.getElementById('btn_continuar_p1');
let btn_continuar_p2 = document.getElementById('btn_continuar_p2');
let btn_continuar_p3 = document.getElementById('btn_continuar_p3');
let btn_continuar_fin = document.getElementById('btn_continuar_fin');
let tab_spacebar = document.getElementById('tab_spacebar');
let spacebar = document.getElementById('spacebar');
let spacebar_pressed = document.getElementById('spacebar_pressed');
let timer_inicio = document.getElementById('timer_inicio');
let timer_test = document.getElementById('timer_test');
let container_spacebar = document.getElementById('cont_spacebar');
let btn_mobile =  document.getElementById('btn-mobile');

let timestamps = [];

let dispositivo = detectMob();

//Resultados de cada prueba
var resultados = {
    disp: dispositivo,
    p0: {timestamps: "", intervals:""},
    p1: {timestamps: "", intervals:""},
    p2: {timestamps: "", intervals:""},
    p3: {timestamps: "", intervals:""}
};


function recordEntry() {
    if (countFlag && (Date.now() - timestart) < testTime) {
        counter++;
        timestamps.push(Date.now() - timestart);
    }
}

let pres0 = document.getElementById('presc_p0');
let pres1 = document.getElementById('presc_p1');
let pres2 = document.getElementById('presc_p2');
let pres3 = document.getElementById('presc_p3');

function finishTest(testNumber) {
    let intervals = [];
    counter = 0;
    currentTest++;
    for (let index = 1; index < timestamps.length; index++) {
        intervals.push(timestamps[index] - timestamps[index - 1])
    }

    //Guarda los resultados
    resultados['p'+ testNumber].timestamps = timestamps.join(',');
    resultados['p'+ testNumber].intervals = intervals.join(',');

    if(testNumber == 0) 
    {
        pres0.innerHTML = 'Prueba 1: <strong>' + precision(666,intervals) + '%/<strong>';
    } else if (testNumber == 1) 
    {
        pres1.innerHTML = 'Prueba 2: <strong>' + precision(1000,intervals) + '%/<strong>';
    } else if (testNumber == 2) 
    {
        pres2.innerHTML = 'Prueba 3: <strong>' + precision(500,intervals) + '%/<strong>';
    } else 
    {
       pres3.innerHTML = 'Prueba 4: <strong>' + precision(400,intervals) + '%/<strong>'; 
    }

    countFlag = false;
    timestamps.length = 0;
}

$(document).keydown(function (event) {
    if (keyUpFlag) {
        keyUpFlag = false;
        spacebar.style.display = 'none';
        spacebar_pressed.style.display = 'initial';
        recordEntry();
    }
});

$(document).keyup(function (event) {
    if (keyUpFlag == false) {
        keyUpFlag = true;
    }

    spacebar_pressed.style.display = 'none';
    spacebar.style.display = 'initial';    
});

const soundArr = document.querySelectorAll(".sound")

$(document).ready(function () {
    $("#botonlocochon1").click(function () {
        prueba1.className = 'tab-pane fade';
        comenzar_prueba(0);
    });
});
$(document).ready(function () {
    $("#botonlocochon2").click(function () {
        prueba2.className = 'tab-pane fade';
        comenzar_prueba(1);
    });
});

$(document).ready(function () {
    $("#botonlocochon3").click(function () {
        $(".botonlocochon").hide();
        prueba3.className = 'tab-pane fade';
        comenzar_prueba(2);
    });
});

$(document).ready(function () {
    $("#botonlocochon4").click(function () {
        prueba4.className = 'tab-pane fade';
        comenzar_prueba(3);
    });
});


function comenzar_prueba(sound) {

    timer_test.innerHTML = '23 segundos';
    tab_spacebar.className = 'tab-pane fade show active';

    sleep(3000);

    setTimeout(setFlags, 8000);

    if (sound == 0) {
        setTimeout(finishTest, 23000, 0);
        soundArr[1].play();
    } else if (sound == 1) {
        setTimeout(finishTest, 23000, 1);
        soundArr[0].play();
    } else if (sound == 2) {
        setTimeout(finishTest, 23000, 2);
        soundArr[2].play();
    } else {
        setTimeout(finishTest, 23000, 3);
        soundArr[3].play();
    }

    
    start = new Date().getTime();

    var x = setInterval(function () {

        // Find the distance between now and the count down date
        var distance = new Date().getTime() - start;

        var seconds = 23 - Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        timer_test.innerHTML = seconds + " segundos";

        // If the count down is finished, write some text
        if (distance > 23000) {
            clearInterval(x);
            timer_test.innerHTML = "Prueba terminada";
            if (sound == 0) {
                btn_continuar_p1.style.display = 'initial';
            } else if (sound == 1) {
                btn_continuar_p2.style.display = 'initial';
            } else if (sound == 2) {
                btn_continuar_p3.style.display = 'initial';
            } else {
                btn_continuar_fin.style.display = 'initial';
            }           
            
        }
    }, 1000);
}

function setFlags() {
    timestart = Date.now();
    countFlag = true;
}

function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

function continuar_p1() {
    btn_continuar_p1.style.display = 'none';
    tab_spacebar.className = 'tab-pane fade';
    prueba2.className = 'tab-pane fade show active';
    tab_p1.className = 'nav-link disabled';
    tab_p2.className = 'nav-link active disabled';
    barra.style.width = '25%';
    barra.innerHTML = '25%';
}

function continuar_p2() {
    btn_continuar_p2.style.display = 'none';
    tab_spacebar.className = 'tab-pane fade';
    prueba3.className = 'tab-pane fade show active';
    tab_p2.className = 'nav-link disabled';
    tab_p3.className = 'nav-link active disabled';
    barra.style.width = '50%';
    barra.innerHTML = '50%';
}

function continuar_p3() {
    btn_continuar_p3.style.display = 'none';
    tab_spacebar.className = 'tab-pane fade';
    prueba4.className = 'tab-pane fade show active';
    tab_p3.className = 'nav-link disabled';
    tab_p4.className = 'nav-link active disabled';
    barra.style.width = '75%';
    barra.innerHTML = '75%';
}

function continuar_fin() {
    btn_continuar_fin.style.display = 'none';
    tab_spacebar.className = 'tab-pane fade';
    final.className = 'tab-pane fade show active';
    tab_p4.className = 'nav-link disabled';
    tab_final.className = 'nav-link active disabled';
    barra.style.width = '100%';
    barra.innerHTML = '100%';
    send_data();
}

btn_continuar_p1.addEventListener('click', continuar_p1);
btn_continuar_p2.addEventListener('click', continuar_p2);
btn_continuar_p3.addEventListener('click', continuar_p3);
btn_continuar_fin.addEventListener('click', continuar_fin);

function mobile_pressed() {
    btn_mobile.style.backgroundColor = '#59311b';
    if (keyUpFlag) {
        keyUpFlag = false;
        recordEntry();
    }
}

function mobile_released() {
    btn_mobile.style.backgroundColor = '#f58549';
    if (keyUpFlag == false) {
        keyUpFlag = true;
    }
}

function detectMob() {
    if(( window.innerWidth <= 768 ) || ( window.innerHeight <= 768 ) )
    {
        return 'movil';
    } else 
    {
        return 'computadora';

    } 
}

function precision(tiempo_perfecto, interv) {
        var acumulador = 0.0;
        var porcentaje = 0.0;
        for (var i = 0; i < interv.length; i++) {
            acumulador += interv[i];
        }
        acumulador = (acumulador/interv.length);
        porcentaje = (acumulador / tiempo_perfecto) * 100;
        return porcentaje;
}


//funcion para enviar datos a la base de datos
function send_data() {
    var postData =  JSON.stringify(resultados);
    $.ajax({
        type: "POST",
        url: "enviarDatos.php",
        data: {resultados:postData},
        traditional: true,
        success: function (data) {
            alert(data);
        },
    });
}



btn_mobile.addEventListener('touchstart', mobile_pressed);
btn_mobile.addEventListener('touchend', mobile_released);