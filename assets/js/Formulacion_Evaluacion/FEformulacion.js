 $(document).on("ready" ,function(){
              ListarFormulacion();
              //REGISTARAR ESTADO ETAPA
   $("#form-AddEtapaEstudio").submit(function(event)
                  {
                      event.preventDefault();
                      $.ajax({
                          url:base_url+"index.php/EstadoEtapa_FE/AddEstadoEtapa_FE",
                          type:$(this).attr('method'),
                          data:$(this).serialize(),
                          success:function(resp){
                           //alert(resp);
                           if (resp=='1') {
                             swal("REGISTRADO","Se registró correctamente", "success");
                             formReset();
                           }
                            if (resp=='2') {
                             swal("NO SE REGISTRÓ","NO se regristró ", "error");
                           }
                          $('#table-EstadoEtapa').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet   funcion
                             formReset();
                         }
                      });
                  });
//REGISTARAR SITUACION
$("#form-AddSituacion").submit(function(event)
                  {
                      event.preventDefault();
                      $.ajax({
                          url:base_url+"index.php/FEsituacion/AddSituacion",
                          type:$(this).attr('method'),
                          data:$(this).serialize(),
                          success:function(resp){
                           //alert(resp);
                           if (resp=='1') {
                             swal("REGISTRADO","Se regristró correctamente", "success");
                             formReset();
                           }
                            if (resp=='2') {
                             swal("NO SE REGISTRÓ","NO se regristró ", "error");
                           }
                          $('#table-formulacion').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet   funcion
                             formReset();
                           }
                      });
                  });
   //REGISTARAR asiganar persona
   $("#form-AddAsiganarPersona").submit(function(event)
                  {
                      event.preventDefault();
                      $.ajax({
                          url:base_url+"index.php/Estudio_Inversion/AddAsiganarPersona",
                          type:$(this).attr('method'),
                          data:$(this).serialize(),
                          success:function(resp){
                           //alert(resp);
                           if (resp=='1') {
                             swal("REGISTRADO","Se regristró correctamente", "success");
                             formReset();
                           }
                            if (resp=='2') {
                             swal("NO SE REGISTRÓ","NO se regristró ", "error");
                           }
                          $('#table-formulacion').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet   funcion
                             formReset();
                         }
                      });
                  });
//limpiar campos
          function formReset()
          {
          document.getElementById("form-AddSituacion").reset();
           document.getElementById("form-AddAsiganarPersona").reset();
          }

			});
 //listar etapas estudio en el modal
 var listarEtapaEstudio=function(id_est_inv)
                {
                    var table=$("#table_etapas_estudio").DataTable({
                     "processing": true,
                      "serverSide":false,
                     destroy:true,
                         "ajax":{
                                    url:base_url+"index.php/Estudio_Inversion/get_etapas_estudio",
                                    type:"POST",
                                    data:{id_est_inv:id_est_inv}
                                    },
                                "columns":[
                                    {"data":"id_est_inv","visible": false},
                                        {"data": function (data, type, dataToSet) {

                                      if (data.denom_etapas_fe =='Formulación') 
                                      {
                                       return '<i class="fa fa-spinner red fa-pulse fa-2x fa-fw"></i><span class="sr-only">Loading...</span>'
                                       // return '<i class="fa fa-circle red fa-2x"></i>';
                                      }
                                        if (data.denom_etapas_fe =='Evaluación') 
                                      {
                                       return '<i class="fa fa-spinner orange fa-pulse fa-2x fa-fw"></i><span class="sr-only">Loading...</span>'
                                      //return '<i class="fa fa-circle purple fa-2x"></i>';
                                     }
                                        if (data.denom_etapas_fe =='Aprobado') 
                                      {
                                        return '<i class="fa fa-spinner blue fa-pulse fa-2x fa-fw"></i><span class="sr-only">Loading...</span>'
                                     // return '<i class="fa fa-circle light blue fa-2x"></i>';
                                     
                                      }
                                        if (data.denom_etapas_fe =='Viabilizado') 
                                      {
                                      return '<i class="fa fa-spinner green fa-pulse fa-2x fa-fw"></i><span class="sr-only">Loading...</span>'
                                     // return '<i class="fa fa-circle light green fa-2x"></i>';
                                      }
                                      if (data.denom_etapas_fe ==null) 
                                      {
                                      return '<button type="button" class=" btn-round btn-warning btn-xs" data-toggle="modal" data-target="#"><i class="fa fa-flag" aria-hidden="true"></i> Asignar</button"';
                                     
                                      }
                                   }},
                                    {"data":"denom_etapas_fe"},
                                    {"data":"recomendaciones"},
                                    {"data":"fecha_inicio"},
                                    {"data":"fecha_final"}
                                 
                                    //{"defaultContent":"<button type='button' class='editar btn btn-primary btn-xs' data-toggle='modal' data-target='#VentanaupdateEstadoFE'><i class='ace-icon fa fa-pencil bigger-120'></i></button><button type='button' class='eliminar btn btn-danger btn-xs' data-toggle='modal' data-target='#'><i class='fa fa-trash-o'></i></button>"}
                                ],
                               "language":idioma_espanol
                    });
                }

//listar estado etapa en el modal
 var listarEstadoEtapa=function(id_etapa_estudio)
                {
                    var table=$("#table-EstadoEtapa").DataTable({
                     "processing": true,
                      "serverSide":false,
                     destroy:true,
                         "ajax":{
                                    url:base_url+"index.php/EstadoEtapa_FE/GetEstadoEtapa_FE",
                                    type:"POST",
                                    data:{id_etapa_estudio:id_etapa_estudio}
                                    },
                                "columns":[
                                    {"data":"id_etapa_estudio","visible": false},
                                    {"data":"denom_estado_fe"},
                                    {"data":"fecha"}
                                    //{"defaultContent":"<button type='button' class='editar btn btn-primary btn-xs' data-toggle='modal' data-target='#VentanaupdateEstadoFE'><i class='ace-icon fa fa-pencil bigger-120'></i></button><button type='button' class='eliminar btn btn-danger btn-xs' data-toggle='modal' data-target='#'><i class='fa fa-trash-o'></i></button>"}
                                ],
                               "language":idioma_espanol
                    });
                }
 //LISTAR DENOMINACION DE FORMULACION Y EVALUACION EN TABLA
                var ListarFormulacion=function()
                {
                    var table=$("#table-formulacion").DataTable({
                     "processing": true,
                      "serverSide":false,
                     destroy:true,
                         "ajax":{
                                    "url":base_url+"index.php/FEformulacion/GetFormulacion",
                                    "method":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                    {"data":"id_est_inv","visible": false},
                                    {"data":"id_pi","visible": false},
                                    {"data":"codigo_unico_est_inv",
                                    "mRender": function ( data, type, full ) {
                                     return '<a style="font-weight:normal;font-size:8" type="button" class="VerDetalleFormulacion btn btn-link" data-toggle="modal" data-target="#VerDetalleFormulacion" href="/codigo_unico_est_inv/' + data + '">' + data+ '</a>';
                                      }
                                    },
                                    {"data":"nombre_est_inv"},
                                    {"data":"provincia"},
                                    {"data":"distrito"},
                                    {"data":"denom_nivel_estudio"},
                                    {"data":"coordinador"},
                                    {"data":"costo_estudio"},
                                    {"data":"denom_situacion_fe"},
                                    {"data":"avance_fisico",
                                      "mRender":function (data,type, full) {
                                         return "<td class='project_progress'><div class='progress progress_sm'><div class='progress-bar bg-green' role='progressbar' data-transitiongoal='57' style='width: "+data+"%;'></div></div><small>"+data+" % Completado</small></td>";
                                    }},
                                    {"data":"id_etapa_estudio",
                                    "mRender": function ( data, type, full )
                                     {

                                         return '<a href="../../FEentregableEstudio/ver_FEentregable/'+data+'"><button type="button" title="Entregables" class="btn btn btn-primary btn-xs"><i class="fa fa-tasks"></i> </button></a><button type="button" title="Ver Gantt" class="gant btn btn-info btn-xs" data-toggle="modal" data-target="#ventanagant"><i class="glyphicon glyphicon-fullscreen" aria-hidden="true"></i></button>';
                                      }
                                    },
                            {"defaultContent":"<div class='dropdown'>  <a class='btn btn-link dropdown-toggle' type='button' data-toggle='dropdown'> <span class='glyphicon glyphicon-option-vertical' aria-hidden='true'></span></a> <ul class='dropdown-menu pull-right' style=''> <li><button type='button' title='Asignar Estado' class='EstadoFE btn btn-link btn-xs' data-toggle='modal' data-target='#VentanaEstadoFE'> Asignar Estado</button></li><li><button type='button' title='Asignar Situacion' class='Situacion btn btn-link btn-xs' data-toggle='modal' data-target='#VentanaSituacionActual'>Asignar Situacion</button></li><li><button type='button' title='Asignar Responsable' class='AsignarPersona btn btn-link btn-xs' data-toggle='modal' data-target='#VentanaAsignarPersona'> Asignar Responsable </button></li><li><button type='button' title='Ver Etapas Estudio' class='ver_etapas_estudio btn btn-link btn-xs' data-toggle='modal' data-target='#ventana_ver_etapas_estudio'> Ver Etapas Estudio </button></li><li><button type='button' title='Presupuesto de Inversión' class='presupuestoProyectoInv btn btn-link btn-xs'>Presupuesto de Inversión</button></li></ul> </div>"}
                             ],
                                 "language":idioma_espanol
                    });
                   presupuestoProInv("#table-formulacion",table);
                   $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
        new $.fn.DataTable.Buttons(table, {
          buttons: [
           {
            "extend": "colvis",
            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
            "className": "btn btn-white btn-primary btn-bold",
            columns: ':not(:first):not(:last)'
            },
            {
            "extend": "copy",
            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "csv",
            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "excel",
            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "pdf",
            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "print",
            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
            "className": "btn btn-white btn-primary btn-bold",
            autoPrint: false,
            message: 'This print was produced using the Print button for DataTables'
            }

          ]
        } );
        table.buttons().container().appendTo( $('.tableTools-container-formulacion') );
                   // DenominacionFE("#table-DenominacionFE",table);
                     ListaFormulacion("#table-formulacion",table);
                    SituacionActual("#table-formulacion",table);
                     RegistarPersona("#table-formulacion",table);
                    ver_etapas_estudio("#table-formulacion",table);
                     RegistarEstadoFE("#table-formulacion",table);
                     gant("#table-formulacion",table);
                }
//LISTAR DENOMINACION DE FORMULACION Y EVALUACION EN TABLA
var DetalleSitActPipEvaluacion=function(codigo_unico_est_inv)
  {
    html1="";
     $("#table-DetSitActEvaluacionFE").html(html1);
    $.ajax({
    "url":base_url+"index.php/EvaluacionFE/GetDetallesituacionActual",
    type:"post",
    data:{codigo_unico_est_inv:codigo_unico_est_inv},
     success:function(respuesta)
                      {
                         var registros = eval(respuesta);

                         html1+="<thead> <tr><th  class='active'><h5>CODIGO UNICO </h5></th><th class='active'><h5>EVALUADOR</h5></th>  <th class='active'><h5>CARGO</h5></th><th class='active'><h5>OBSERVACIONES</h5></th><th class='active'><h5>FECHA</h5></th></tr></thead>"
                         for (var i = 0; i <registros.length;i++) {
                              html1 +="<tbody> <tr  class='success'><th>"+registros[i]["codigo_unico_est_inv"]+"</th><th>"+registros[i]["Evaluador"]+"</th><th>"+registros[i]["desc_cargo"]+"</th><th>"+registros[i]["observacion"]+"</th><th>"+registros[i]["fecha"]+"</th></tr>";
                          //alert(suma);
                           };
                             html1 +="</tbody>";
                         $("#table-DetSitActEvaluacionFE").html(html1);

                      }
                    });
    }
    var  ListaFormulacion=function(tbody,table){
                               $(tbody).on("click","a.VerDetalleFormulacion",function(){
                              var data=table.row( $(this).parents("tr")).data();
                               var codigo_unico_est_inv=data.codigo_unico_est_inv;
                               DetalleSitActPipEvaluacion(codigo_unico_est_inv);
                          });
                      }

           var  presupuestoProInv=function(tbody,table){
                               $(tbody).on("click","button.presupuestoProyectoInv",function(){
                               var data=table.row( $(this).parents("tr")).data();
                               var id_est_inv=data.id_est_inv;
                               window.location.href=base_url+"index.php/FE_Presupuesto_Inv/index/"+id_est_inv+"/";//+codigo_unico_est_inv;
                          });
                      }

              var  SituacionActual=function(tbody,table){
                    $(tbody).on("click","button.Situacion",function(){
                        var data=table.row( $(this).parents("tr")).data();
                        var txt_IdEtapa_Estudio=$('#txt_IdEtapa_Estudio').val(data.id_etapa_estudio);
                         listarsituacionFE();
                  });
                }
                //para registar estado de FE
                 var  RegistarEstadoFE=function(tbody,table){
                    $(tbody).on("click","button.EstadoFE",function(){
                        var data=table.row( $(this).parents("tr")).data();
                         var id_etapa_estudio=data.id_etapa_estudio;
                        var txt_IdEtapa_Estudio_FE=$('#txt_IdEtapa_Estudio_FE').val(data.id_etapa_estudio);
                         listarEstadoFE();
                         listarEstadoEtapa(id_etapa_estudio);
                  });
                }
                        //para ver etapas de los estudios
                 var  ver_etapas_estudio=function(tbody,table){
                    $(tbody).on("click","button.ver_etapas_estudio",function(){
                        var data=table.row( $(this).parents("tr")).data();
                         var id_est_inv=data.id_est_inv;
                        var txtIdEtapaEstudio_v=$('#txtIdEtapaEstudio_v').val(data.id_est_inv);
                         listarEtapaEstudio(id_est_inv);
                  });
                }
           var listarEstadoFE=function(valor){
                     html="";
                    $("#Cbx_EstadoFE").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/FEestado/get_FEestado",
                        type:"POST",
                        success:function(respuesta3){
                         //  alert(respuesta);
                         var registros = eval(respuesta3);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option  value="+registros[i]["id_estado"]+"> "+registros[i]["denom_estado_fe"]+" </option>";
                            };
                            $("#Cbx_EstadoFE").html(html);
                            $('select[name=Cbx_EstadoFE]').val(valor);//PARA AGREGAR UN COMBO PSELECIONADO
                            $('select[name=Cbx_EstadoFE]').change();
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
                }
                var listarsituacionFE=function(valor){
                     html="";
                    $("#Cbx_Situacion").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/FEsituacion/get_FEsituacion",
                        type:"POST",
                        success:function(respuesta3){
                         //  alert(respuesta);
                         var registros = eval(respuesta3);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option  value="+registros[i]["id_situacion_fe"]+"> "+registros[i]["denom_situacion_fe"]+" </option>";
                            };
                            $("#Cbx_Situacion").html(html);
                            $('select[name=Cbx_Situacion]').val(valor);//PARA AGREGAR UN COMBO PSELECIONADO
                            $('select[name=Cbx_Situacion]').change();
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
                }
                /*gant*/
                   var  gant=function(tbody,table){
                                      $(tbody).on("click","button.gant",function(){
                                          var data=table.row( $(this).parents("tr")).data();
                                          var id=data.id_etapa_estudio;
                                          //mostrar el gant en el modal
                                            gantt.init("gantt_here");
                                          gantt.refreshData();
                                          gantt.load('http://localhost/smp/index.php/FEentregableEstudio/ver_FEentregable/'+id);
                                     });
                                  }
                                  /*Asiganar Persona*/
var  RegistarPersona=function(tbody,table){
                    $(tbody).on("click","button.AsignarPersona",function(){
                        var data=table.row( $(this).parents("tr")).data();
                        var txt_IdEtapa_Estudio_p=$('#txt_IdEtapa_Estudio_p').val(data.id_etapa_estudio);
                         listarPersonaFE();
                  });
                }
var listarPersonaFE=function(valor){
                     html="";
                    $("#Cbx_Persona").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Estudio_Inversion/get_persona",
                        type:"POST",
                        success:function(respuesta3){
                         //  alert(respuesta);
                         var registros = eval(respuesta3);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option  value="+registros[i]["id_persona"]+"> "+registros[i]["nombres_apell"]+" </option>";
                            };
                            $("#Cbx_Persona").html(html);
                            $('select[name=Cbx_Persona]').val(valor);//PARA AGREGAR UN COMBO PSELECIONADO
                            $('select[name=Cbx_Persona]').change();
                            $('.selectpicker').selectpicker('refresh');
                                listarCargoFE();
                        }
                    });
                }
                  var listarCargoFE=function(valor){
                     html="";
                    $("#Cbx_Cargo").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Estudio_Inversion/get_cargo",
                        type:"POST",
                        success:function(respuesta3){
                         //  alert(respuesta);
                         var registros = eval(respuesta3);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option  value="+registros[i]["id_cargo"]+"> "+registros[i]["desc_cargo"]+" </option>";
                            };
                            $("#Cbx_Cargo").html(html);
                            $('select[name=Cbx_Cargo]').val(valor);//PARA AGREGAR UN COMBO PSELECIONADO
                            $('select[name=Cbx_Cargo]').change();
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
                }
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
