// function miFuncion() {
//     swal({
//         title: 'Hola me encanta la comida y viajar',
//         timer: 3000
//     });

// }
function saludo (nombre){
    swal(`Hola ${nombre} gracias por visitarnos, no olvides likear mi página`);
}


function saludoUsuario(cb) {
    var nombre = prompt('Ingresa tu nombre');
    cb(nombre);
    
}

saludoUsuario(saludo);