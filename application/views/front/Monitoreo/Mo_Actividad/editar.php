<form  id="frmEditarActividad">
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_content" >		
				<div class="row">
					<div class="col-md-12">
						<div id ="divFormEditarActividad">
							<input type="hidden" id="hdIdPi" name="hdIdPi" autocomplete="off" class="form-control" value="<?=$idPi?>">
							<input type="hidden" id="hdIdActividad" name="hdIdActividad" autocomplete="off" class="form-control" value="<?=$actividad->id_actividad?>">
							<input type="hidden" id="hdIdProducto" name="hdIdProducto" autocomplete="off" class="form-control" value="<?=$actividad->id_producto?>">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<label for="control-label">Actividad:</label>
									<div>
										<input type="text" id="txtActividad" name="txtActividad" autocomplete="off" class="form-control" value="<?=$actividad->desc_actividad?>">
									</div>
								</div>								
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12">
									<label for="control-label">Unidad de Medida:</label>
									<div>
										<select id="txtUnidad" name="txtUnidad" class="form-control selectpicker" data-live-search="true">
											<?php foreach ($listaUnidadMedida as $key => $value) { ?>
												<option value="<?=$value->descripcion?>" <?php echo ($actividad->uni_medida==$value->descripcion ? 'selected':'')?>><?=$value->descripcion?>													
												</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<label for="control-label">Meta</label>
									<div>
										<input type="text" id="txtMeta" name="txtMeta" autocomplete="off" class="form-control" value="<?=$actividad->meta?>">
									</div>
								</div>	
								<div class="col-md-3 col-sm-6 col-xs-12">
									<label for="control-label">Fecha de Inicio</label>
									<div>
										<input type="date" id="txtFechaInicio" name="txtFechaInicio" autocomplete="off" class="form-control" value="<?=$actividad->fecha_inicio?>">
									</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<label for="control-label">Fecha de Fin</label>
									<div>
										<input type="date" id="txtFechaFin" name="txtFechaFin" autocomplete="off" class="form-control" value="<?=$actividad->fecha_fin?>">
									</div>
								</div>							
							</div>							
						</div>
						<div class="row">
							<br><br>
							<div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center">
								<input type="button" name="" class="btn btn-success" value="Guardar" onclick="guardarEdicionActividad();">
								<input type="button" name="" class="btn btn-danger"  data-dismiss="modal" value="Cerrar ventana">
								<!--<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar ventana</button>-->
							</div>	
						</div>
					</div>					
				</div>
			</div>				
		</div>
	</div>
</div>
</form>
<script>
	$('.selectpicker').selectpicker({
	});

	$(function()
	{
		$('#divFormEditarActividad').formValidation(
		{
			framework: 'bootstrap',
			excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
			live: 'enabled',
			message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
			trigger: null,
			fields:
			{
				txtActividad:
				{
					validators:
					{				
						notEmpty:
						{
							message: '<b style="color: red;">El campo "Actividad" es requerido.</b>'
						}
					}
				},
				txtUnidad:
				{
					validators:
					{				
						notEmpty:
						{
							message: '<b style="color: red;">El campo "Unidad de Medida" es requerido.</b>'
						}
					}
				},
				txtMeta:
				{
					validators:
					{				
						notEmpty:
						{
							message: '<b style="color: red;">El campo "Meta" es requerido.</b>'
						},
						regexp:
						{
							regexp: /^[0-9]+$/,
							message: '<b style="color: red;">El campo "Meta" debe ser un número</b>'
						}
					}
				},
				txtFechaInicio:
				{
					validators:
					{
						notEmpty:
						{
							message: '<b style="color: red;">El campo "Fecha de Inicio" es requerido.</b>'
						}
					}
				},
				txtFechaFin:
				{
					validators:
					{
						notEmpty:
						{
							message: '<b style="color: red;">El campo "Fecha de Fin" es requerido.</b>'
						}
					}
				}
			}
		});
	});

	function guardarEdicionActividad()
	{
		event.preventDefault();
		$('#divFormEditarActividad').data('formValidation').validate();
		if(!($('#divFormEditarActividad').data('formValidation').isValid()))
		{
			return;
		}
		var formData=new FormData($("#frmEditarActividad")[0]);
		var idPi=$('#hdIdPi').val();
		$.ajax({
	        type:"POST",
	        url:base_url+"index.php/Mo_Actividad/editar",
	        data: formData,
	        cache: false,
	        contentType:false,
	        processData:false,
	        success:function(resp)
	        {
	        	resp = JSON.parse(resp);
	        	((resp.proceso=='Correcto') ? swal(resp.proceso,resp.mensaje,"success") : swal(resp.proceso,resp.mensaje,"error"));
	        	$('#frmEditarActividad')[0].reset();
                $('#modal3').modal('hide');
	        	paginaAjaxDialogo(null, 'Editar Producto',{ id_pi: idPi }, base_url+'index.php/Mo_MonitoreodeProyectos/EditarProducto', 'GET', null, null, false, true);
	        }
    	});
	}
	
</script>