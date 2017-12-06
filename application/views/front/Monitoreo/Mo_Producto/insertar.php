<div class="form-horizontal">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div>
				<input type="hidden" id="id_pi" value="<?=$proyecto[0]->id_pi?>">
				<textarea name="txtNombreProyectoInversion" id="txtNombreProyectoInversion" rows="2" class="form-control" style="resize: none;resize: vertical;" readonly="readonly"><?=html_escape(trim($proyecto[0]->nombre_pi))?></textarea>
			</div>
		</div>
	</div>
	<br>
	<div id="divAgregarProducto" class="row" style="margin-top: 3px;">
		<div class="col-md-10 col-sm-6 col-xs-12">
			<input type="text" class="form-control" id="txtDescripcionProducto" name="txtDescripcionProducto" placeholder="Descripción del producto">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="button" class="btn btn-info" value="Agregar producto" onclick="agregarProducto();" style="width: 100%;">
		</div>
	</div>
	<!--<div class="row" style="height: 300px;overflow-y: scroll;">
		<div class="col-md-12 col-sm-12 col-xs-12" style="font-size: 12px;">
			<ul id="ulProducto" style="list-style-type: upper-roman;">
			</ul>
		</div>
	</div>-->
	<div class="row" style="height: 300px;overflow-y: scroll; margin-top: 15px;">
		<div class="col-md-12 col-sm-12 col-xs-12">
        	<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
              	<div class="panel">
                	<div class="panel-heading">
				        <h4 class="panel-title" style="float:right;">
				          <a role = "button" class="btn btn-round btn-warning btn-xs"><span class="fa fa-plus"></span></a>
				        </h4>
				        <a class="panel-title" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Collapsible Grodfdup 1</a>				        
				    </div>

                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      	<div class="panel-body">
                      		<div class="table-responsive">
                      			<table class="table table-bordered">
	                          		<thead>
	                            		<tr>
	                              			<th>#</th>
	                              			<th>First Name</th>
	                              			<th>Last Name</th>
	                              			<th>Username</th>
	                            		</tr>
	                          		</thead>
	                          		<tbody>
	                            		<tr>
	                              			<th scope="row">1</th>
	                              			<td>Mark</td>
	                              			<td>Otto</td>
	                              			<td>@mdo</td>
	                            		</tr>
	                          		</tbody>
	                        	</table>
                      			
                      		</div>
                        	
                      	</div>
                    </div>
              	</div>
              	<div class="panel">
                	<a  class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  	<h4 class="panel-title">Collapsible Group Items #3</h4>
               		</a>
                	<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  		<div class="panel-body">
                    		<p><strong>Collapsible Item 3 data</strong>
                    		</p>
                    		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                  		</div>
                	</div>
              	</div>
            </div>
        </div>
	</div>

	<hr>
	<div class="row" style="text-align: right;">		
		<button class="btn btn-danger" data-dismiss="modal">
			<span class="glyphicon glyphicon-remove"></span>
			Cerrar ventana
		</button>
	</div>
</div>

<script>
	function agregarProducto()
	{
		paginaAjaxJSON({ "idPi" : $('#id_pi').val(), "descripcionProducto" : $('#txtDescripcionProducto').val().trim() }, base_url+'index.php/Mo_MonitoreodeProyectos/InsertarProducto', 'POST', null, function(objectJSON)
		{
			resp=JSON.parse(objectJSON);

			console.log(resp);

			((resp.proceso=='Correcto') ? swal(resp.proceso,resp.mensaje,"success") : swal(resp.proceso,resp.mensaje,"error"));
            
            if(resp.proceso=='Correcto')
            {
            	/*
            	<div class="panel">
                	<div class="panel-heading">
				        <h4 class="panel-title" style="float:right;">
				          <a role = "button" class="btn btn-round btn-warning btn-xs"><span class="fa fa-plus"></span></a>
				        </h4>
				        <a class="panel-title" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Collapsible Grodfdup 1</a>				        
				    </div>
              	</div>
            	*/
            	var htmlTemp= '<div class="panel"><div class="panel-heading"><h4 class="panel-title" style="float:right;"><a role = "button" class="btn btn-round btn-warning btn-xs"><span class="fa fa-plus"></span></a></h4><a class="panel-title" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">'+replaceAll(replaceAll($('#txtDescripcionProducto').val().trim(), '<', '&lt;'), '>', '&gt;')+'</a></div></div>';

	            /*var htmlTemp='<div class = "panel">'+
					'<a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><h4 class="panel-title">'+ replaceAll(replaceAll($('#txtDescripcionProducto').val().trim(), '<', '&lt;'), '>', '&gt;')+'</h4></a></div>';*/

				


				$('#accordion').append(htmlTemp);

				$('#txtDescripcionProducto').val('');

            }
		}, false, true);

	}
</script>