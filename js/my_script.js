
$all_ul = $('#menu-menu2');

//console.log($all_ul);

$('#menu-menu2').each(function(){
    var phrase = '';
    $(this).find('li').each(function(){
        // cache jquery object
        var current = $(this);
        var current_a = current.find('a'); //obtengo la etiqueta a

        var contacto = current_a.attr("title"); //obtengo el valor de la propiedad title que me dice que es el btn contacto

        if(contacto === "Quiero Resultados"){
        	current.addClass('text-center');
        	current_a.addClass('btn-dark d-block');	
        } 
        
    });
});