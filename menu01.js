$(document).ready(main); //Es decir, cuando el documento o función main esté ready, es decir, cuando toda nuestra página se haya cargado primero//

var contador = 1; //Antes de crear la función main añadimos una variable contador igual a 1//

function main(){ //Función main//
    $('.bt-menu').click(function(){ //Es decir, cuando haga click en el botón menu_bar pasará lo siguiente que vamos a escribir//
        //$('nav').toggle();//
        //Si usamos tooggle el menu aparece desplegado nada mas entrar en la web. Lo haremos de otra manera. Nos vamos a estilos css y en header nav añadimos left:-100%;//
        //Añadimos un condicional://
        if(contador == 1){
            $('nav').animate({
                left: '0'
            });
            contador = 0;
        } else {
            contador = 1;
            $('nav').animate({
                left: '-100%'
            });
        }
    });
};