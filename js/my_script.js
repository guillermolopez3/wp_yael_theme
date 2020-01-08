
$all_ul = $('#menu_top');

//console.log($all_ul);

$('#menu_top').each(function(){
    var phrase = '';
    $(this).find('li').each(function(){
        // cache jquery object
        var current = $(this);
        var current_a = current.find('a'); //obtengo la etiqueta a

        var contacto = current_a.attr("title"); //obtengo el valor de la propiedad title que me dice que es el btn contacto

        if(contacto === "Quiero Resultados"){
        	current.addClass('text-center sticky-top');
        	//current_a.addClass('btn-dark d-block');	
            current_a.addClass('btn btn-naranja d-block'); 
        }
        
    });
});

//funcion para agregarle la clase active tanto si se mueve dentro de la misma pag como si cambia a blog
$(function() {
    var pathname = window.location.href; //fullpath 
    var url_base = window.location.origin + '/'; //url base
    var seccion = pathname.split('#');
    var current_section = seccion[1]; //obtengo la seccion actual, ej clientes

    // elementos de la lista
    var menues = $("#menu_top li");
    
    //verifico si estoy en el home, sin ir a ninguna sección en particular
    if(url_base.length == pathname.length){
        menues.removeClass("active");

    }else{
        if(!pathname.includes('blog')){ //verifico si hice clic en blog, para no tocar los attr y q se encarge bootstrap
            menues.removeClass("active"); //si n estoy en blog, le saco el attr active a todo

            //recorro el nav
            $('#menu_top').each(function(){
                $(this).find('li').each(function(){ //obtengo los li
                    var current = $(this); //guardo el li actual para agregarle la clase active
                    var current_a = current.find('a'); //obtengo la etiqueta a

                    var contacto = current_a.attr("href"); //obtengo el valor de la propiedad href para saber la seccion

                    //si la seccion es igual al path, muestro resaltado donde estoy
                    if(contacto.includes(current_section)){
                        current.addClass('active');
                    }
                    
                });
            });
        }
    }
  
  
  //agrega las clases cuando se hace click en el menu
  menues.click(function() {
     menues.removeClass("active");
     $(this).addClass("active");
  });


});


//boton que te persigue en movil
var menu = document.getElementById("menu_top"); //obtengo la etiqueta de menu para saber su alto
console.log(menu.clientHeight); //me da la altura del menu

window.onscroll = function() {myFunction()}; //cuando hago scroll se llama a la fn

var header = document.getElementById("stick-header"); //obtengo el div con ese id


//obtengo el boton que el cual me va a decir cuando llega al top para mostrar el nuevo stick-hrader
var btn_resul = document.getElementById('btn_resul'); 


// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    
    var alto_menu = menu.clientHeight; //alto del nav
    var distance = btn_resul.getBoundingClientRect().top; //distancia entre el top y el elemento


    //si la distancia del btn mostrado es menor a la altura del nav (llego arriba) 
    if(distance <= alto_menu){
        header.style.display = 'block';
        header.style.top = menu.clientHeight+'px';

    }
    else{
       // header.classList.remove("sticky");
       header.style.display = 'none';
    }
}



//agrego la clase active cuando hago scroll sobre la seccion servicios (social pai)
$('#servicios').waypoint(function() {

    $("#menu_top li").removeClass('active') //elimino todos los active
    var prueba = $('a[href$="servicios"]:first');  //busco el a cuyo href sea servicio
    var padre = prueba.parent().addClass('active'); //me da el pade, el li para agregarle la clase active
  
}, { offset: 50 });


//agrego la clase active cuando hago scroll sobre la seccion nosotros (bio)
$('#nosotros').waypoint(function() {

    $("#menu_top li").removeClass('active') //elimino todos los active
    var prueba = $('a[href$="nosotros"]:first');  //busco el a cuyo href sea servicio
    var padre = prueba.parent().addClass('active'); //me da el pade, el li para agregarle la clase active
  
}, { offset: 50 });

//agrego la clase active cuando hago scroll sobre la seccion clientes (casos de exito)
$('#clientes').waypoint(function() {

    $("#menu_top li").removeClass('active') //elimino todos los active
    var prueba = $('a[href$="clientes"]:first');  //busco el a cuyo href sea servicio
    var padre = prueba.parent().addClass('active'); //me da el pade, el li para agregarle la clase active
  
}, { offset: 50 });

//cuando estoy en el hero ninguna queda pintada
$('#hero').waypoint(function() {

    $("#menu_top li").removeClass('active')
  
}, { offset: 0 });


//cuando estoy en el testimonios ninguna queda pintada
$('#testimonios').waypoint(function() {

    $("#menu_top li").removeClass('active')
  
}, { offset: 0 });

//cuando estoy en el certificaciones ninguna queda pintada
$('#certificaciones').waypoint(function() {

    $("#menu_top li").removeClass('active')
  
}, { offset: 0 });

//cuando estoy en el blog ninguna queda pintada
$('#blog').waypoint(function() {

    $("#menu_top li").removeClass('active')
  
}, { offset: 0 });