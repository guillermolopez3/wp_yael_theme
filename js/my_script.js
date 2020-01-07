
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