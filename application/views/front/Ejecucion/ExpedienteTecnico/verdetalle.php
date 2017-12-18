
<link href="<?php echo base_url(); ?>assets/li/css/layout.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/li/css/menu.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/li/js/script.js"></script>
<style>
	.btn.btn-app{
		background-color: #f2f5f7;
		color:white;
		box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.2);
		border: none;
		-webkit-transition: transform 0.3s;
        -moz-transition: transform 0.3s;
        -ms-transition: transform 0.3s;
        -o-transition: transform 0.3s;
        transition: transform 0.4s;
        user-select : none;
	}
	.btn.btn-app:hover{
		background-color: #f2f5f7;
		color:white;
		transform: scale(1.125);
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}
	.menuPrincipal
	{
		background-color: #35495d;
		color: #73879c;
		font-size: 13px;

	}
	.nav>li>a
	{
    	color: white;
	}
	.nav .open>a, .nav .open>a:focus, .nav .open>a:hover
	{
    	background-color: #26576f;
    	color: white;
	}
	.menuPrincipal>li>a:hover
	{
    	padding: 13px 15px 12px;
    	background-color: #5c94a0;
    	color: white;

	}
	.dropdown:hover{
		background-color: #35495d;
	}
	.subMenu >li>a:hover{
		background-color: #35495d;
		color:white;
	}
	.subMenu >li>a
	{
		padding: 5px 5px;
		color:#35495d;
		font-size: 13px;
	}
	.modal
	{
	   overflow:auto !important;
	}
	.dropdown:hover .dropdown-menu{
		display: block;

	}
	.dropdown-menu
	{
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		margin: 0px 0 0;

	}
	address{
		font-size: 13px;

	}

</style>
<div class="right_col" role="main">
	<div>
		<div class="clearfix"></div>
		<div class="col-md-12 col-xs-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><b>
						<?php
						if($ExpedienteTecnicoElaboracion[0]->id_etapa_et == 1)
						{ ?>
							Expediente Técnico
						<?php } ?>
						<?php
						if($ExpedienteTecnicoElaboracion[0]->id_etapa_et == 3)
						{ ?>
							Proyecto en Ejecución
						<?php } ?>
					</b></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
				<p></p>

                  	<ul class="nav nav-pills menuPrincipal" role="tablist">
                    	<li role="presentation" class="dropdown">
                      		<a id="drop4" href="#" class="dropdown-toggle" role="button" aria-expanded="false">	Expediente Técnico<span class="caret"></span>
                            </a><ul id="menu6" class="dropdown-menu subMenu" role="menu">
	                        	<li role="presentation">
		                        	<a role="menuitem" tabindex="-1" href="#"  onclick="paginaAjaxDialogo(null, 'Modificar Expediente Técnico',{ id_et: '<?=$ExpedienteTecnicoElaboracion[0]->id_et?>' }, base_url+'index.php/Expediente_Tecnico/editar', 'GET', null, null, false, true);return false;"><i class="fa fa-edit"></i> Editar Expediente Técnico
		                        	</a>
	                        	</li>
	                        	<li  role="presentation">
	                        		<a role="menuitem" tabindex="-1" class='eliminarExpediente' href="#" onclick="Eliminar(<?=$ExpedienteTecnicoElaboracion[0]->id_et?>);return false;"><i class="fa fa-trash-o"></i> Eliminar Expediente Técnico
		                        	</a>
		                        </li>
		                    </ul>

                    	</li>
                    	<li role="presentation" class="dropdown">
                      		<a id="drop5" href="#" class="dropdown-toggle"  role="button" aria-expanded="false"> Mantenimiento<span class="caret"></span>
                            </a>
                      		<ul id="menu2" class="dropdown-menu subMenu" role="menu" aria-labelledby="drop5">
                      			<li role="presentation">
	                        		<a role="menuitem" tabindex="-1" href="#" onclick="paginaAjaxDialogo(null, 'Asignación de especialistas requeridos', { idExpedienteTecnico : <?=$ExpedienteTecnicoElaboracion[0]->id_et?> }, base_url+'index.php/ET_PER_REQ/insertar', 'GET', null, null, false, true); return false;"><i class="fa fa-users"></i> Asignar Personal
		                        	</a>
		                        </li>
		                        <li role="presentation">
	                        		<a role="menuitem" tabindex="-1" href="#" onclick="paginaAjaxDialogo(null, 'Visto Bueno del E.T.', { id_ExpedienteTecnico : <?=$ExpedienteTecnicoElaboracion[0]->id_et?> }, base_url+'index.php/Expediente_Tecnico/vistoBueno','GET', null, null, false, true); return false;"><i class="fa fa-thumbs-up"></i> Dar Visto Bueno
		                        	</a>
		                        </li>
		                        <?php if($ExpedienteTecnicoElaboracion[0]->estado_revision == 1) { ?>
		                        <li role="presentation">
	                        		<a role="menuitem" tabindex="-1" href="#"  onclick="paginaAjaxDialogo(null, 'Aprobar Expediente Técnico', { idExpedienteTecnico : <?=$ExpedienteTecnicoElaboracion[0]->id_et?> }, base_url+'index.php/Expediente_Tecnico/clonar', 'GET', null, null, false, true); return false;"><i class="fa fa-check-square"></i> Aprobar E.T.
		                        	</a>
		                        </li>
		                        <?php }?>
		                        <li role="presentation">
		                        	<a role="menuitem" tabindex="-1" href="#" onclick="paginaAjaxDialogo(null, 'Agregar Periodo de Ejecucion',{ id_et: '<?=$ExpedienteTecnicoElaboracion[0]->id_et?>' }, base_url+'index.php/Expediente_Tecnico/PeriodoEjecucion', 'GET', null, null, false, true);return false;"><i class="fa fa-calendar-check-o"></i> Periodo de Ejecución
		                        	</a>
	                        	</li>
                      		</ul>
                    	</li><li role="presentation" class="dropdown">
                      		<a id="drop6" href="#" class="dropdown-toggle" role="button" aria-expanded="false"> Operaciones <span class="caret"></span>
                            </a>
                      		<ul id="menu2" class="dropdown-menu subMenu" role="menu" aria-labelledby="drop5">
		                        <li role="presentation">
	                        		<a role="menuitem" tabindex="-1" href="#" onclick="window.open(base_url+'index.php/ET_Tarea/index?id_et=<?=$ExpedienteTecnicoElaboracion[0]->id_et?>', '_blank'); return false;"><i class="fa fa-list-ol"></i> Gestionar Actividades
	                        		</a>
		                        </li>
		                        <li role="presentation">
	                        		<a role="menuitem" tabindex="-1" href="#" onclick="paginaAjaxDialogo(null, 'Presupuesto analítico', { idExpedienteTecnico : <?=$ExpedienteTecnicoElaboracion[0]->id_et?> }, base_url+'index.php/ET_Presupuesto_Analitico/insertar', 'GET', null, null, false, true); return false;"><i class="fa fa-money"></i> Presupuesto Analítico
		                        	</a>
		                        </li>
                        		<li role="presentation">
	                        		<a role="menuitem" tabindex="-1" href="#" class="editar" onclick="paginaAjaxDialogo(null, 'Registro de componentes, metas y partidas', { idExpedienteTecnico : <?=$ExpedienteTecnicoElaboracion[0]->id_et?> }, base_url+'index.php/ET_Componente/insertar', 'GET', null, null, false, true); return false;" ><i class="fa fa-bars"></i> Componentes, Metas y Partidas
		                        	</a>
		                        </li>
		                        <li role="presentation">
	                        		<a role="menuitem" tabindex="-1" href="#" onclick="window.open(base_url+'index.php/Expediente_Tecnico/valorizacionEjecucionProyecto?id_et=<?=$ExpedienteTecnicoElaboracion[0]->id_et?>', '_blank'); return false;"><i class="fa fa-calendar"></i> Cronogramación
		                        	</a>
			                    </li>

		                        <?php if($ExpedienteTecnicoElaboracion[0]->id_etapa_et == 2 || $ExpedienteTecnicoElaboracion[0]->id_etapa_et == 3)
		                        { ?>
			                         <li role="presentation">
		                        		<a role="menuitem" tabindex="-1" href="<?= site_url('Expediente_Tecnico/ControlMetrado/'.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target='_blank'); return false;"><i class="fa fa-play"></i> Ejecución diaria de Metrados
			                        	</a>
			                        </li>
			                        <li role="presentation">
		                        		<a role="menuitem" tabindex="-1" href="<?= site_url('Expediente_Tecnico/ValorizacionFisicaMetrado/'.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target='_blank'); return false;"><i class="fa fa-th-list"></i> Valorizacion Mensual
			                        	</a>
			                        </li>
		                        <?php } ?>
                      		</ul>
                    	</li><li role="presentation" class="dropdown">
                      		<a id="drop7" href="#" class="dropdown-toggle" role="button" aria-expanded="false"> Detalle Expendiente <span class="caret"></span>
                            </a>
                      		<ul id="menu3" class="dropdown-menu subMenu" role="menu" aria-labelledby="drop6">
                      			<li role="presentation">
									<a role="menuitem" tabindex="-1" title='Listar Responsable'  onclick="paginaAjaxDialogo(null, 'Listar Responsables del Expediente Técnico',{ id_et: '<?=$ExpedienteTecnicoElaboracion[0]->id_et?>' }, base_url+'index.php/Expediente_Tecnico/ResponsableExpediente', 'POST', null, null, false, true);" ><i class="fa fa-user"></i> Responsable</a>
								</li>
								<li role="presentation">
								<a role="menuitem" tabindex="-1" title='Documentos adjuntados'  onclick="paginaAjaxDialogo(null, 'Listar Documentos',{ id_et: '<?=$ExpedienteTecnicoElaboracion[0]->id_et?>' }, base_url+'index.php/Expediente_Tecnico/DocumentoExpediente', 'GET', null, null, false, true);" ><i class="fa fa-file"></i> Documentos</a>
								</li>
								<li role="presentation">
								<a role="menuitem" tabindex="-1" onclick="paginaAjaxDialogo(null, 'Detalle de expediente técnico',{id_et:'<?=$ExpedienteTecnicoElaboracion[0]->id_et?>'}, base_url+'index.php/Expediente_Tecnico/DetalleExpediente', 'POST', null, null, false, true);" ><i class="fa fa-list"></i> Detalle Expediente</a>
								</li>
                      		</ul>
                    	</li>
                    	<li role="presentation" class="dropdown">
                      		<a id="drop7" href="#" class="dropdown-toggle" role="button" aria-expanded="false"> Reporte Estadístico <span class="caret"></span>
                            </a>
                      		<ul id="menu3" class="dropdown-menu subMenu" role="menu" aria-labelledby="drop6">
                      			<li role="presentation">
									<a role="menuitem" tabindex="-1" href="<?= site_url('Expediente_Tecnico/ReporteEstadistico?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target='_blank'); return false;"><i class="fa fa-line-chart"></i> Reporte
			                        	</a>
								</li>
                      		</ul>
                    	</li>
                 	</ul>
                  	<br/>
                  	<div class="table-responsive">
                  		<h5 style="padding-bottom: 4px;"><b>Datos Generales del Proyecto:</b></h5>
                  		<table class="table table-bordered">
	                      	<tbody>
	                      		<tr>
	                      			<td style="width: 15%; text-align: right;"><b>Nombre del Proyecto:</b></td>
	                      			<td colspan="3" style="width: 85%;"><?= trim($ExpedienteTecnicoElaboracion[0]->nombre_pi);?></td>
	                      		</tr>
	                      		<tr>
	                      			<td style="width: 15%; text-align: right;"><b>Codigo:</b></td>
	                      			<td colspan="3" style="font-size: 13px;"><?=$ExpedienteTecnicoElaboracion[0]->codigo_unico_pi?></td>
	                      		</tr>
	                      		<tr>
	                      			<td style="width: 15%; text-align: right;"><b>Unidad Ejecutora:</b></td>
	                      			<td colspan="3"><?=$ExpedienteTecnicoElaboracion[0]->nombre_ue?></td>
	                      		</tr>
	                      		<tr>
	                      			<td style="width: 15%; text-align: right;"><b>Costo de Preinversion:</b></td>
	                      			<td style="width: 35%;"> S/. <?=a_number_format($ExpedienteTecnicoElaboracion[0]->costo_total_preinv_et,2,'.',",",3)?></td>
	                      			<td style="width: 15%; text-align: right;"><b>Función:</b></td>
	                      			<td style="width: 35%;"><?=$ExpedienteTecnicoElaboracion[0]->funcion_et?></td>
	                      		</tr>
	                      		<tr>
	                      			<td style="width: 15%; text-align: right;"><b>Costo de Inversion:</b></td>
	                      			<td style="width: 35%;">S/. <?=a_number_format($ExpedienteTecnicoElaboracion[0]->costo_total_inv_et,2,'.',",",3)?></td>
	                      			<td style="width: 15%; text-align: right;"><b>Programa:</b></td>
	                      			<td style="width: 35%;"><?=$ExpedienteTecnicoElaboracion[0]->programa_et?></td>
	                      		</tr>
	                      		<tr>
	                      			<td style="width: 15%; text-align: right;"><b>Tiempo de Ejecución:</b></td>
	                      			<td style="width: 35%;"><?=$ExpedienteTecnicoElaboracion[0]->tiempo_ejecucion_pi_et?></td>
	                      			<td style="width: 15%; text-align: right;"><b>SubPrograma:</b></td>
	                      			<td style="width: 35%;"><?=$ExpedienteTecnicoElaboracion[0]->sub_programa_et?></td>
	                      		</tr>
	                      		<tr>
	                      			<td style="width: 15%; text-align: right;"><b>Número de Beneficiarios:</b></td>
	                      			<td style="width: 35%;"><?=a_number_format($ExpedienteTecnicoElaboracion[0]->num_beneficiarios,0,'.',",",3)?></td>
	                      			<td style="width: 15%; text-align: right;"><b>Modalidad:</b></td>
	                      			<td style="width: 35%;"><?=$ExpedienteTecnicoElaboracion[0]->modalidad_ejecucion_et?></td>
	                      		</tr>
	                      	</tbody>
	                    </table>
                  	</div>
                   	<!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                    <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Codigo:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?=$ExpedienteTecnicoElaboracion[0]->codigo_unico_pi?>">
                        </div>
                     </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control col-md-7 col-xs-12" readonly="readonly" rows="4"><?= trim($ExpedienteTecnicoElaboracion[0]->nombre_pi);?>
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Unidad Ejecutora: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?=$ExpedienteTecnicoElaboracion[0]->nombre_ue?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Costo Total del Proyecto PreInversion:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?=a_number_format($ExpedienteTecnicoElaboracion[0]->costo_total_preinv_et,2,'.',",",3)?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Costo Total del Proyecto Inversion:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?=a_number_format($ExpedienteTecnicoElaboracion[0]->costo_total_inv_et,2,'.',",",3)?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiempo de Ejecucion:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?=$ExpedienteTecnicoElaboracion[0]->tiempo_ejecucion_pi_et?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero de Beneficiarios:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?=$ExpedienteTecnicoElaboracion[0]->num_beneficiarios?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>

                    </form>-->
                    <div class="row">
                    	<div class="col-md-12" style="text-align: center; display: inline-block;">
                    		<?php if($ExpedienteTecnicoElaboracion[0]->id_etapa_et == 1 )
		                    { ?>
	                    		<div>
				                    <h6><span>Formatos de Expediente Técnico</span></h6>
									<a style="background-color: #fd9b15;" class="btn btn-app"  data-toggle="tooltip" title="Ficha Técnica del Proyectos" href="<?= site_url('Expediente_Tecnico/reportePdfExpedienteTecnico?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank" >
										<i class="fa fa-file-pdf-o"></i> Formato FF-01
									</a>
									<a style="background-color: #e73e3a;" class="btn btn-app"  data-toggle="tooltip" title="Presupuesto Resumen"  href="<?= site_url('Expediente_Tecnico/reportePdfPresupuestoFF05?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank">
										<i class="fa fa-file-pdf-o"></i> Formato FF-05
									</a>
									<a style="background-color: #5cb360;" class="btn btn-app" data-toggle="tooltip" title="Cuadro de Presupuesto Analítico General" href="<?= site_url('Expediente_Tecnico/reportePdfPresupuestoAnalitico?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank">
										<i class="fa fa-file-pdf-o"></i> Formato FF-06
									</a>

									<a style="background-color: #11b8cc;" class="btn btn-app"  data-toggle="tooltip" title="Presupuesto General" href="<?= site_url('Expediente_Tecnico/reportePdfEjecucion007?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank">
									<i class="fa fa-file-pdf-o"></i> Formato FF-07
									</a>

									<a style="background-color: #11b8cc;" class="btn btn-app"  data-toggle="tooltip" title="Sustentación de Metrados" href="<?= site_url('Expediente_Tecnico/reportePdfMetrado?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank">
										<i class="fa fa-file-pdf-o"></i> Formato FF-10
									</a>
									<a style="background-color: #f3632e;" class="btn btn-app"  data-toggle="tooltip" title="Análisis de Costos Unitarios" href="<?= site_url('Expediente_Tecnico/reportePdfAnalisisPrecioUnitarioFF11?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank">
										<i class="fa fa-file-pdf-o"></i> Formato FF-11
									</a>
									<a style="background-color: #0976b4;" class="btn btn-app"  data-toggle="tooltip" title="Cronograma Valorizado de Ejecución del Proyecto" href="<?= site_url('Expediente_Tecnico/reportePdfValorizacionEjecucion?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank">
										<i class="fa fa-file-pdf-o"></i> Formato FF-15
									</a>
								</div>
							<?php } ?>
							<?php if($ExpedienteTecnicoElaboracion[0]->id_etapa_et == 2 || $ExpedienteTecnicoElaboracion[0]->id_etapa_et == 3)
		                    { ?>
								<div>
				                    <h6><span>Formatos de Expediente Técnico</span></h6>
				                    <a style="background-color: #fd9b15;" class="btn btn-app"  data-toggle="tooltip" title="Informe Mensual" href="<?= site_url('Expediente_Tecnico/reportePdfInformeMensual?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank" >
										<i class="fa fa-file-pdf-o"></i> Formarto FE-02
									</a>
									<a style="background-color: #e73e3a;" class="btn btn-app"  data-toggle="tooltip" title="Valorizacion Mensual" href="<?= site_url('Expediente_Tecnico/reportePdfValorizacionFisica?id_et='.$ExpedienteTecnicoElaboracion[0]->id_et);?>" target="_blank" >
										<i class="fa fa-file-pdf-o"></i> Formarto FE-03
									</a>
								</div>
							<?php } ?>
                    	</div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<?php
$sessionTempCorrecto=$this->session->flashdata('correcto');
$sessionTempError=$this->session->flashdata('error');

if($sessionTempCorrecto){ ?>
	<script>
	$(document).ready(function()
	{
		swal('','<?=$sessionTempCorrecto?>', "success");
	});
	</script>
<?php }

if($sessionTempError){ ?>
<script>
	$(document).ready(function()
	{
	swal('','<?=$sessionTempError?>', "error");
	});
</script>
<?php } ?>
<script>

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
	function(){$.ajax({url:base_url+"index.php/Expediente_Tecnico/eliminar",type:"POST",data:{id_et:id_et},success:function(respuesta)
			{
				var object = JSON.parse(respuesta);
				if(<?=$ExpedienteTecnicoElaboracion[0]->id_etapa_et?> == 1)
				{
					(object.proceso == 'Error' ? swal(object.proceso,object.mensaje, "error") : swal(object.proceso,object.mensaje, "success"));
					window.location.href='<?=base_url();?>index.php/Expediente_Tecnico/index/';
					renderLoading();
				}
				if(<?=$ExpedienteTecnicoElaboracion[0]->id_etapa_et?> == 3)
				{
					(object.proceso == 'Error' ? swal(object.proceso,object.mensaje, "error") : swal(object.proceso,object.mensaje, "success"));
					window.location.href='<?=base_url();?>index.php/Expediente_Tecnico/ejecucion/';
					renderLoading();
				}
			}
		});
	});
}

$(document).on('hidden.bs.modal', '.modal', function ()
{
    if ($('body').find('.modal.in').length > 0)
    {
        $('body').addClass('modal-open');
    }
});
</script>
