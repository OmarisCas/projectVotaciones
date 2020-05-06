var suma=0;
$(document).ready(function() {
    $('#example').DataTable({
    	"language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
	            "first":    "Primero",
	            "last":    "Último",
	            "next":    "Siguiente",
	            "previous": "Anterior"
	        },
        }
    });

$( '.checkbox' ).on( 'click', function() {
   if( $(this).is(':checked') ){
     suma = suma + 1;
       document.getElementById("inputContador").value = suma;
   } else {
       suma = suma -1;
       document.getElementById("inputContador").value = suma;
   }
});
	
});

function noSombrear(){
	var color = document.getElementById("inputContador");
	color.style.background = "#FFFFFF";
}
function sombrear(){
	//alert("ok");
	var color = document.getElementById("inputContador");
	color.style.background = "#E5E7E9";
}

function accederTd(){
	accederCedulas();
}
//funcion para el onload de la pagina html
function accederCedulas(){
	var elementos = document.getElementsByClassName("ced");
	var myCed = JSON.parse(ceds);
	
	for (var i =0;i<elementos.length;i++){
		elementos[i].textContent = myCed.ced[i].num;
	}
}