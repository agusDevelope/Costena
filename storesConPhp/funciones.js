
	$(document).ready(function(){
		$('#tablastores').load('tabla.php');

    $('#btnAgregarJuego').click(function(){
      if(validarFormVacio('frmAgrega') > 0){
        alertify.alert("Debes llenar todos los campos por favor!");
        return false;
      }

      datos=$('#frmAgrega').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"php/insertar.php",
        success:function(r){
          if(r==1){
           $('#frmAgrega')[0].reset();
           $('#tablastores').load('tabla.php');
           alertify.success("Agregado con exito :)");
         }else{
          alertify.error("No se pudo agregar :(");
        }
      }
    });
    });


  });


  $(document).ready(function(){
    $('#btnactualizar').click(function(){

      datos=$('#frmactualiza').serialize();
        $.ajax({
          type:"POST",
          data:datos,
          url:"php/actualizar.php",
          success:function(r){
            if(r==1){
             $('#tablastores').load('tabla.php');
               alertify.success("Actualizado con exito :)");
            }else{
               alertify.error("No se pudo actualizar :(");
            }
           }
        });
    });
  });



  function obtenDatos(idjuego){
    $.ajax({
      type:"POST",
      data:"idjuego=" + idjuego,
      url:"php/obtenerRegistro.php",
      success:function(r){
        datos=jQuery.parseJSON(r);

        $('#id_juego').val(datos['id_juego']);
        $('#nombrejU').val(datos['nombrejU']);
        $('#aniojU').val(datos['aniojU']);
        $('#empresajU').val(datos['empresajU']);
      }
    });
  }

  
  function validarFormVacio(formulario){
    datos=$('#' + formulario).serialize();
    d=datos.split('&');
    vacios=0;
    for(i=0;i< d.length;i++){
      controles=d[i].split("=");
      if(controles[1]=="A" || controles[1]==""){
        vacios++;
      }
    }
    return vacios;
  }

  function elimina(idjuego){
      alertify.confirm('Eliminar juego', '¿Desea eliminar este registro?', 
              function(){ 
                  $.ajax({
                     type:"POST",
                      data:"idjuego=" + idjuego,
                      url:"php/eliminar.php",
                      success:function(r){
                          if(r==1){     
                              $('#tablastores').load('tabla.php');
                              alertify.success("Eliminado con exito :)");
                          }else{
                               alertify.error("No se pudo eliminar :(");
                          }
                      }
                  });
              }
              ,function(){ 
                alertify.error('Cancelo')
              });
  }

