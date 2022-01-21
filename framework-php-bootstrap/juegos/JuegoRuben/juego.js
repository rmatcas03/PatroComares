var cartas = new Array({ nombre: 'Tennis', seleccion: false }, { nombre: 'Pádel', seleccion: false }, { nombre: 'Fútbol', seleccion: false }, { nombre: 'Baloncesto', seleccion: false }, { nombre: 'Atletismo', seleccion: false }, { nombre: 'Natación', seleccion: false }, { nombre: 'Ciclismo', seleccion: false }, { nombre: 'Defensa per.', seleccion: false }, { nombre: 'Tennis', seleccion: false }, { nombre: 'Pádel', seleccion: false }, { nombre: 'Fútbol', seleccion: false }, { nombre: 'Baloncesto', seleccion: false }, { nombre: 'Atletismo', seleccion: false }, { nombre: 'Natación', seleccion: false }, { nombre: 'Ciclismo', seleccion: false }, { nombre: 'Defensa per.', seleccion: false });

var intentos = 0;
var jugada1 = "";
var jugada2 = "";
var identificadorJ1 = "";
var identificadorJ2 = "";

function iniciarJuego() {
    var dato = document.getElementById("juego");
    dato.style.opacity = 1;

    cartas.sort(function() { return Math.random() - 0.5 });
    for (var i = 0; i < 16; i++) {
        var carta = cartas[i].nombre;
        var dato = document.getElementById(i.toString());
        dato.dataset.valor = carta;
    }
};

function resetearJuego() {
    cartas.sort(function() { return Math.random() - 0.5 });
    for (var i = 0; i < 16; i++) {
        var carta = cartas[i].nombre;
        var dato = document.getElementById(i.toString());
        dato.dataset.valor = carta;
        colorCambio(i, 'black', 'Deporte');
    }
}

function girarCarta() {
    var evento = window.event;

    jugada2 = evento.target.dataset.valor;
    identificadorJ2 = evento.target.id;


    if (jugada1 !== "") {

        if (jugada1 === jugada2 && identificadorJ1 !== identificadorJ2 && cartas[parseInt(identificadorJ2)].seleccion != true && cartas[parseInt(identificadorJ1)].seleccion != true) {

            cartas[parseInt(identificadorJ1)].seleccion = true;
            cartas[parseInt(identificadorJ2)].seleccion = true;

            colorCambio(identificadorJ2, "blue", jugada2);
            vaciar();
            comprobar();
        } else if (identificadorJ1 !== identificadorJ2) {
            var self = this;
            setTimeout(function() {
                colorCambio(self.identificadorJ1, "black", "Deporte")
                colorCambio(self.identificadorJ2, "black", "Deporte")
                vaciar()
            }, 200);

            colorCambio(identificadorJ2, "blue", jugada2);
        }
    } else if (jugada2 !== "valor") {

        colorCambio(identificadorJ2, "blue", jugada2);

        jugada1 = jugada2;
        identificadorJ1 = identificadorJ2;
    }
};

function vaciar() {
    jugada1 = "";
    jugada2 = "";

    identificadorJ1 = "";
    identificadorJ2 = "";
}

function colorCambio(posicion, color, contenido) {
    document.getElementById(posicion.toString()).style.backgroundColor = color;
    document.getElementById(posicion.toString()).innerHTML = contenido;
}

function comprobar() {
    var aciertos = 0;
    for (var i = 0; i < 16; i++) {
        if (cartas[i].seleccion == true) {
            aciertos++;
        }

    }

    if (aciertos == 16) {
        alert("GANASTE");
    }
}

function resetearJuego() {
    cartas.sort(function() { return Math.random() - 0.5 });
    for (var i = 0; i < 16; i++) {
        var carta = cartas[i].nombre;
        var dato = document.getElementById(i.toString());
        dato.dataset.valor = carta;
        colorCambio(i, 'black', 'Deporte');
    }
};