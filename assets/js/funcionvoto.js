     $(document).ready(function(){
      $('#btn_id').click(function(){
        var sw = 0;
        var partido_politico = "";
        //var partido_politico_tarjeton = -1;
          // Valida partido
          var suma = 0;
          var los_cboxes = document.getElementsByName('chk[]');
          for (var i = 0, j = los_cboxes.length; i < j; i++) {

            if(los_cboxes[i].checked == true){
              suma++;
              partido_politico = los_cboxes[i].value;
            }
          }

          if(suma == 0){
            sw = 0;
            //alert('debe seleccionar un campo laboral');
            //return false;
          }else{
            if(suma == 1){
              //alert('Todo bien 1');
              sw = 1;
            }else {
              sw = 0;
              //alert('solo puede seleccionar maximo 1 campos laborales');
              //return false;
            }
          }
          /*
          //Valida numero
          var suma2 = 0;
          var los_cboxes2 = document.getElementsByName('chk2[]');
          for (var i = 0, j = los_cboxes2.length; i < j; i++) {

            if(los_cboxes2[i].checked == true){
              suma2++;
              partido_politico_tarjeton = i;
            }
          }

          if(suma2 == 0){
            sw = 0;
            //alert('debe seleccionar un campo laboral');
            //return false;
          }else{
            if(suma2 == 1){
              //alert('Todo bien 2');
              sw = sw + 1;
            }else {
              sw = 0;
              //alert('solo puede seleccionar maximo 1 campos laborales');
              //return false;
            }
          }
          */

          if(sw == 1){
            //alert("CORRECTO");
            
            $('#mensaje_confirm').html("Confirmación de selección.<br/>Usted seleccionó el candidato: " + partido_politico + '.<br/><br/> ¿Es correcto la elección?');
            $('#confirmarvoto').modal('show'); // abrir
          }else{
            $('#voto_error').modal('show'); // abrir
          }
            //si acepta la seleccion que hizo del candidato
          $("#btn_aceptar_voto").click(function(){
            $('#confirmarvoto').modal('hide'); // abrir
            $('#voto_realizado').modal('show'); // abrir
          });

          
          
          /*
          $("#btn_imprimir_certificado").click(function(){
            location.href ="../index.php";
          });
          */

        });
    
    });

     function registraVO(id){
          //console.log("La variable mesa ha llegado con el valor: " + id);
            //alert("La variable mesa es: " + mesa);

            var partido_politico = "";
        //var partido_politico_tarjeton = -1;
          // Valida partido
          var suma = 0;
          var los_cboxes = document.getElementsByName('chk[]');
          for (var i = 0, j = los_cboxes.length; i < j; i++){
            if(los_cboxes[i].checked == true){
              suma++;
              partido_politico = los_cboxes[i].value;
            }
          }

            //console.log("Candidato seleccionado es: " + partido_politico);

            $.ajax({
              method: 'POST',
              url: '../../model/voto.php',
              data: {'candidatoSelect':partido_politico, 'table':id},
              success: function(data) {
              console.log(" Mensaje: " + data)
            },
              error: function(data) {
                console.log("Error: " + data)
              }
            });
     
    }