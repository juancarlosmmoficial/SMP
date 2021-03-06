 $(document).on("ready" ,function(){
              listanivelEstudio();
                $("#form-addNivelEstudio").submit(function(event)//para añadir nueva funcion
                  {
                      event.preventDefault();
                      $.ajax({
                          url:base_url+"index.php/FEnivelEstudio/add_NivelEstudio",
                          type:$(this).attr('method'),
                          data:$(this).serialize(),
                          success:function(resp){
                           swal("",resp, "success");
                          $('#table-NivelEstudio').dataTable()._fnAjaxUpdate();

                         }
                      });
                  });
                $("#form-UpdateFEnivelEstudio").submit(function(event)//Actualizar funcion
                  {
                      event.preventDefault();
                      $.ajax({
                          url:base_url+"index.php/FEnivelEstudio/Update_NivelEstudio",
                          type:$(this).attr('method'),
                          data:$(this).serialize(),
                          success:function(resp){
                           swal("",resp, "success");
                           $('#table-NivelEstudio').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet
                         }
                      });
                  });
			});
                var listanivelEstudio=function()
                {
                    var table=$("#table-NivelEstudio").DataTable({
                     "processing": true,
                      "serverSide":false,
                     destroy:true,

                         "ajax":{
                                    "url":base_url+"index.php/FEnivelEstudio/get_FEnivelEstudio",
                                    "method":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                    {"data":"id_nivel_estudio","visible": false},
                                    {"data":"denom_nivel_estudio"},
                                    {"defaultContent":"<button type='button' class='editar btn btn-primary btn-xs' data-toggle='modal' data-target='#VentanaNivelEstudioUpdate'><i class='ace-icon fa fa-pencil bigger-120'></i></button><button type='button' class='eliminar btn btn-danger btn-xs' data-toggle='modal' data-target='#'><i class='fa fa-trash-o'></i></button>"}
                                ],

                                "language":idioma_espanol
                    });
                    FENivelEstudios("#table-NivelEstudio",table);

                }
                var FENivelEstudios=function(tbody,table){
                       $(tbody).on("click","button.editar",function(){
                        var data=table.row( $(this).parents("tr")).data();
                        var id_estado=$('#Id_denom_nivel_estudioA').val(data.id_nivel_estudio);
                        var denom_nivel_estudio=$('#txt_denom_nivel_estudioA').val(data.denom_nivel_estudio);
                        
                    });
                }


           

        /*Idioma de datatablet table-sector */
            var idioma_espanol=
                {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
