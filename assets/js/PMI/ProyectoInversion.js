 $(document).on("ready" ,function(){

                 setTimeout(
                    function() {
                      $('#table-ProyectoInversion').DataTable().ajax.reload(null, false);
                    }, 125);

                listaProyectoInversion();/*llamar proyecto de inversion*/
                 // listar();
               /* $("#form-addFuncion").submit(function(event)//para añadir nueva funcion
                  {
                      event.preventDefault();
                      $.ajax({
                          url:base_url+"index.php/Funcion/AddFucion",
                          type:$(this).attr('method'),
                          data:$(this).serialize(),
                          success:function(resp){
                           swal("",resp, "success");
                          $('#table-Funcion').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet   funcion   
                           //listaSectorCombo();//llamado para la recarga al añadir un nuevo secto
                            listaFuncionCombo();
                         }
                      });
                  });*/
               
			});
			     //listra proyeto de inversion el la tabla*/
                var listaProyectoInversion=function()
                {
                    var table=$("#table-ProyectoInversion").DataTable({
                     "processing":true,
                     "serverSide":false,
                     destroy:true,
                         "ajax":{
                                    "url":base_url+"index.php/ProyectoInversion/GetProyectoInversion",
                                    "method":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                    {"data":"id_pi"},
                                    {"data":"nombre_pi"},
                                    {"data":"codigo_unico_pi"},
                                    {"data":"costo_pi"},
                                    {"data":"devengado_ac_pi"},
                                    {"data":"fecha_registro_pi"},
                                    {"data":"fecha_viabilidad_pi"},
                                    {"defaultContent":"<button type='button' class='editar btn btn-primary btn-xs' data-toggle='modal' data-target='#'><i class='ace-icon fa fa-pencil  bigger-120'></i></button><button type='button' class='VerProyecto btn btn-success btn-xs' data-toggle='modal' data-target='#VerDetalleProyectoInversion'><i class='ace-icon fa fa-eye bigger-120'></i></button>"}
                                ],

                                "language":idioma_espanol
                    });              
                 ListaProyectoInversionData("#table-ProyectoInversion",table);  //obtener data de funcion para agregar  AGREGAR                 		   	
                }

                /*fin listar proyecto de inversion*/
                var ListaProyectoInversionData=function(tbody,table){
                       $(tbody).on("click","button.VerProyecto",function(){
                        var data=table.row( $(this).parents("tr")).data();
                        var Id_ProyectoInver=data.id_pi;
                        MostrarDetalleProyecto(Id_ProyectoInver);
                        /*var txt_codigofuncionM=$('#txt_codigofuncionM').val(data.codigo_funcion);
                        var txt_nombrefuncionM=$('#txt_nombrefuncionM').val(data.nombre_funcion);*/

                    });
                }
                var MostrarDetalleProyecto=function(Id_ProyectoInver){
                    event.preventDefault(); 
                    html="";
                    $("table-detalleProyectoInversion").html(html);
                    $.ajax({
                        "url":base_url +"index.php/ProyectoInversion/BuscarProyectoInversion",
                        type:"POST",
                        data:{Id_ProyectoInver:Id_ProyectoInver},
                        success:function(respuesta){
                         var registros = eval(respuesta);
                            html+="<thead> <tr> <th class='active'>DATOS DEL PROYECTOS DE INVERSIÓN</th>  <th class='active' colspan='5'>DETALLE </th> </tr></thead>"
                            for (var i = 0; i <registros.length;i++) {
                              html +="<tbody> <tr><th class='success'>CÓDIGO ÚNICO</th><th  colspan='5'>"+registros[i]["codigo_unico_pi"]+"</th></tr> <tr><th class='success'>PROYECTO DE INVERSIÓN</th><th  colspan='5'>"+registros[i]["nombre_pi"]+"</th></tr>";    
                              html +="<tr><th class='success'>COSTO</th><th  colspan='5'>"+registros[i]["costo_pi"]+"</th></tr> <tr><th class='success'>DEVENGADO</th><th  colspan='5'>"+registros[i]["devengado_ac_pi"]+"</th></tr>";
                              html +="<tr><th class='success'>FECHA  DE REGISTRO</th><th  colspan='5'>"+registros[i]["fecha_registro_pi"]+"</th></tr> <tr><th class='success'>FECHA DE VIABILIDAD</th><th  colspan='5'>"+registros[i]["fecha_viabilidad_pi"]+"</th></tr>";  
                              html+="<thead> <tr> <th class='active'>UNIDAD EJECUTORA</th>  <th class='active' colspan='5'>DETALLE </th> </tr></thead>";
                              html +="<tr><th class='success'>NOMBRE UNIDAD EJECUTORA</th><th  colspan='5'>"+registros[i]["nombre_ue"]+"</th></tr> <tr><th class='success'>NOMBRE</th><th  colspan='5'>"+registros[i]["nombre_ue"]+"</th></tr>";  
                              html+="<thead> <tr> <th class='active'>NATURALEZA DE INVERSIÓN</th>  <th class='active' colspan='5'>DETALLE </th> </tr></thead>";
                              html +="<tr><th class='success'>NATURALEZA DE INVERSIÓN</th><th  colspan='5'>"+registros[i]["nombre_naturaleza_inv"]+"</th></tr> <tr><th class='success'>NOMBRE</th><th  colspan='5'>"+registros[i]["nombre_naturaleza_inv"]+"</th></tr>";  

                              html +="</tbody>";
                            };    
                            $("#table-detalleProyectoInversion").html(html);
                        }
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

        /* function listar()
					{
						alert("hola");
            event.preventDefault();
						$.ajax({
              "url":base_url+"index.php/ProyectoInversion/GetProyectoInversion",
							type:"POST",
							success:function(respuesta){
								alert(respuesta);
                console.log(respuesta);
							}
						});
					}*/