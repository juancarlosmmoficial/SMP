<div class="right_col" role="main">
	<div>
		<div class="clearfix"></div>
		<div class="col-md-12 col-xs-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><b>EXPEDIENTE TÉCNICO</b></h2>
					<div class="clearfix"></div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<button onclick="BuscarProyectocodigo();" class="btn btn-primary"> NUEVO</button>
							<div class="x_title">
								<div class="clearfix"></div>
							</div>
							<table id="table-ExpedienteTecnico" style="text-align: center;" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<td>Unidad Ejecutora</td>
										<td>Nombre del proyecto</td>
										<td>Costo Total del proyecto Preinversion</td>
										<td>Costo Total del proyecto Inversion</td>
										<td>Tiempo Ejecucion</td>
										<td>Numero Beneficiarios</td>
										<td class="col-md-2 col-md-2 col-xs-12"></td>
									</tr>
								</thead>
								<tbody>
								<?php foreach($listaExpedienteTecnico as $item){ ?>
								  	<tr>
										 <td>
											<?= $item->nombre_ue?>
										</td>
										<td>
											<?= $item->nombre_pi?>
										</td>
										<td>
											<?= $item->costo_total_preinv_et?>
										</td>
										<td>
											<?= $item->costo_total_inv_et?>
										</td>
										<td>
											<?= $item->tiempo_ejecucion_pi_et?>
										</td>
										<td>
											<?= $item->num_beneficiarios?>
										</td>
										<td>
									  		<button type='button' class='editar btn btn-primary btn-xs'><i class='ace-icon fa fa-pencil bigger-120' onclick="paginaAjaxDialogo(null, 'Modificar Expediente Técnico',{ id_et: '<?=$item->id_et?>' }, base_url+'index.php/Expediente_Tecnico/editar', 'GET', null, null, false, true);"></i></button>
											<button type='button' title='Registro de componentes, metas y partidas' class='editar btn btn-warning btn-xs' onclick="paginaAjaxDialogo(null, 'Registro de componentes, metas y partidas', { idExpedienteTecnico : <?=$item->id_et?> }, base_url+'index.php/ET_Componente/insertar', 'GET', null, null, false, true);"><i class='ace-icon fa fa-align-left bigger-120'></i></button>
											<button type='button' title='Administración de partidad y analítico' class='editar btn btn-success btn-xs' onclick="paginaAjaxDialogo(null, 'Administración de partidad y analítico', { idExpedienteTecnico : <?=$item->id_et?> }, base_url+'index.php/ET_Detalle_Partida/insertar', 'GET', null, null, false, true);"><i class='ace-icon fa fa-indent bigger-120'></i></button>
											<button onclick="Eliminar(<?=$item->id_et?>);" title='Eliminar Expediente Técnico'  class='eliminarExpediente btn btn-danger btn-xs'><i class="fa fa-trash-o"></i></button>
											<div class="btn-group">
												<button data-toggle="dropdown" class="btn btn-info dropdown-toggle btn-xs" type="button">Reportes <span class="caret"></span>
												</button>
												<ul role="menu" class="dropdown-menu">
													<li>
													<a title='Ficha tecnica de expediente tecnico'  href="<?= site_url('Expediente_Tecnico/reportePdfExpedienteTecnico/'.$item->id_et);?>" target="_blank">Expediente Técnico 001</a>
													</li>
													<li>
													<a  title='Reporte Metrados'  href="<?= site_url('Expediente_Tecnico/reportePdfMetrado/'.$item->id_et);?>" target="_blank">Metrado</a>
													</li>
												</ul>
											</div>
										</td>
								  	</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<script>
	$(document).ready(function()
	{
		$('#table-ExpedienteTecnico').DataTable(
		{
			"language":idioma_espanol
		});

	});

function BuscarProyectocodigo()
{
	swal({
	  title: "Buscar",
	  text: "Proyecto: Ingrese Código Único del proyecto",
	  type: "input",
	  showCancelButton: true,
	  closeOnConfirm: false,
	  inputPlaceholder: "Ingrese Codigo Unico"
	}, function (inputValue) {
	
	if (inputValue === "")
	  {
	  	swal.showInputError("Ingresar codigo!");
    	return false
	  }
	 else 
	 {
			event.preventDefault();
			$.ajax({
				"url":base_url+"index.php/Expediente_Tecnico/registroBuscarProyecto",
				type:"GET", 
				data:{inputValue:inputValue},
				cache:false,
				beforeSend: function() {
                    renderLoading();
				},
				success:function(resp){
					var ProyetoEncontrado=eval(resp);
					if(ProyetoEncontrado.length==1){
							var buscar="true";
							paginaAjaxDialogo(null, 'Registrar Expediente Técnico',{CodigoUnico:inputValue,buscar:buscar}, base_url+'index.php/Expediente_Tecnico/insertar', 'GET', null, null, false, true);
	  						swal("Correcto!", "Se Encontro el Proyecto: " + inputValue, "success");
					}else{
							swal.showInputError("No se encontro el  Codigo Unico. Intente Nuevamente!");
	    					return false
					}
					
				}
			});
		}

	});
}

function Eliminar(id_et)
	{
		swal({
				title: "Esta seguro que desea eliminar el Expediente Técnico, ya que se eliminara también los responsables y sus imagenes?",
				text: "",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "SI,ELIMINAR",
				closeOnConfirm: false
			},
			function()
			{
				$.ajax({
                        url:base_url+"index.php/Expediente_Tecnico/eliminar",
                        type:"POST",
                        data:{id_et:id_et},
                        success:function(respuesta)
                        {
							
							swal("ELIMINADO!", "Se elimino correctamente el expediente técnico.", "success");
							window.location.href='<?=base_url();?>index.php/Expediente_Tecnico/index/';
							renderLoading();
                        }
                    });
			});
	}


</script>