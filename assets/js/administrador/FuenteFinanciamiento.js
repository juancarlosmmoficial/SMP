$(document).on("ready" ,function(){
	listaFuenteFinanciamiento();/*llamar a mi datatablet listar funcion*/
	//abrir el modal para registrar

	//REGISTARAR NUEVA fuente financiamiento
	$("#form-AddFuenteFinanciamiento").submit(function(event)
	{
		event.preventDefault();

		$.ajax(
		{
			url : base_url+"index.php/FuenteFinanciamiento/AddFuenteFinanciamiento",
			type : $(this).attr('method'),
			data : $(this).serialize(),
			success : function(resp)
			{
				if(resp=='1')
				{
					swal("Se registró...","", "success");
					
					formReset();

					$('#VentanaRegFuenteFinanciamiento').modal('hide');
				}

				if(resp=='2')
				{
					swal("NO se registró...","", "error");
				}

				$('#dynamic-table-FuenteFinanciamiento').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet   funcion   
				formReset();
			}
		});
	});

	//limpiar campos
	function formReset()
	{
		document.getElementById("form-AddFuenteFinanciamiento").reset();
		document.getElementById("form-EditFuenteFinanciamiento").reset();
	}

	//formulario para ediotar
	$("#form-EditFuenteFinanciamiento").submit(function(event)
	{
		event.preventDefault();

		$.ajax(
		{
			url : base_url+"index.php/FuenteFinanciamiento/UpdateFuenteFinanciamiento",
			type : $(this).attr('method'),
			data : $(this).serialize(),
			success : function(resp)
			{
				swal(resp,"", "success");

				$('#dynamic-table-FuenteFinanciamiento').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet   funcion   
				
				formReset();

				$('#VentanaEditFuenteFinanciamiento').modal('hide');
			}
		});
	});
});

         /*listra */
                var listaFuenteFinanciamiento=function()
                {
                    var myTableFFTO=$("#dynamic-table-FuenteFinanciamiento").DataTable({
                     "processing":true,
                     "serverSide":false,
                     destroy:true,

                         "ajax":{
                                    "url":base_url+"index.php/FuenteFinanciamiento/get_FuenteFinanciamiento",
                  "method":"POST",
                  "dataSrc":""
                                    },
                                "columns":[
                                  {"defaultContent":" <label class='pos-rel'><input type='checkbox' class='ace' /><span class='lbl'></span></label>","visible": false},
                                  {"data":"id_fuente_finan" ,"visible": false},
                                  {"data":"nombre_fuente_finan"},
                                  {"data":"acronimo_fuente_finan"},
                                  {"defaultContent":"<button type='button' class='editar btn btn-primary btn-xs' data-toggle='modal' data-target='#VentanaEditFuenteFinanciamiento'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></button><button type='button' class='eliminar btn btn-danger btn-xs' data-toggle='modal' data-target='#'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>"}
                               ],

                                "language":idioma_espanol
                    }); 

        Fuente_FinanciamientoData("#dynamic-table-FuenteFinanciamiento",myTableFFTO);  //CARGAR LA DATA PARA MOSTRAR EN EL MODAL  
        EliminarFuente_FinanciamientoData("#dynamic-table-FuenteFinanciamiento",myTableFFTO);
                }

                var  Fuente_FinanciamientoData=function(tbody,myTableFFTO){
                    $(tbody).on("click","button.editar",function(){
                        var data=myTableFFTO.row( $(this).parents("tr")).data();
                        listaComboRubroEjecucion();//ACTUALIZAR EL COMBOX EN EL MODAL MODIFICAR
                        var txt_IdFuenteFinanciamientoM=$('#txt_IdFuenteFinanciamientoM').val(data.id_fuente_finan);
                        var cbxRubroEjecucionM=$('#cbxRubroEjecucionM').val(data.id_rubro);
                        var txt_NombreFuenteFinanciamientoM=$('#txt_NombreFuenteFinanciamientoM').val(data.nombre_fuente_finan);
                        var txt_AcronimoFuenteFinanciamientoM=$('#txt_AcronimoFuenteFinanciamientoM').val(data.acronimo_fuente_finan);
                   
                    });
                }
         
                var EliminarFuente_FinanciamientoData=function(tbody,myTableFFTO){
                  $(tbody).on("click","button.eliminar",function(){
                        var data=myTableFFTO.row( $(this).parents("tr")).data();
                        var id_fuente_finan=data.id_fuente_finan;
                        console.log(data);
                         swal({
                                title: "Desea eliminar ?",
                                text: "",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Yes,Eliminar",
                                closeOnConfirm: false
                              },
                              function(){
                                    $.ajax({
                                          url:base_url+"index.php/FuenteFinanciamiento/EliminarFuenteFinanciamiento",
                                          type:"POST",
                                          data:{id_fuente_finan:id_fuente_finan},
                                          success:function(respuesta){
                                            //alert(respuesta);
                                            swal("Se eliminó corectamente.", "", "success");
                                            $('#dynamic-table-FuenteFinanciamiento').dataTable()._fnAjaxUpdate();//para actualizar mi datatablet datatablet

                                          }
                                        });
                              });
                    });
                }
        //TRAER DATOS EN UN COMBO DE RUBRO DE EJECUCION
               /* var listaComboRubroEjecucion=function()
                {
                    html="";
                    $("#cbxRubroEjecucion").html(html); //nombre del selectpicker RUBRO DE EJECUCION
                    event.preventDefault(); 
                    $.ajax({
                        "url":base_url +"index.php/MRubroEjecucion/GetRubroE",
                        type:"POST",
                        success:function(respuesta){
                           // alert(respuesta);
                         var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_rubro"]+"> "+ registros[i]["nombre_rubro"]+" </option>";   
                            };
                            $("#cbxRubroEjecucion").html(html);//
                            $("#cbxRubroEjecucionM").html(html);//
                            $('.selectpicker').selectpicker('refresh'); 
                        }
                    });
                }*/
          //FIN TRAER DATOS EN UN COMBO DE RUBRO EJECUCION
             
              
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


