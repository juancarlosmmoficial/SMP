
<!-- fin gantt -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <!-- form input mask -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h6>Estudio: <?php echo $this->session->userdata('NombreEstudio');?> | Código Único:<?php echo $this->session->userdata('Codigo_único');?></h6>
                   </div>
                  <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                      <ul id="myTab" class="nav nav-tabs" role="tablist">
                                          <li role="presentation" class="active"><a href="#tab_entregable" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
                                          </li>
                                          <li role="presentation" class=""><a href="#tab_tipo_inversion" role="tab"  id="profile-tab" data-toggle="tab" aria-expanded="false"> <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                                          </li>
                                        </li>
                                      </ul>
                                      <div id="myTabContent" class="tab-content">
                                      <input type="hidden" id="txt_id_etapa_estudio" name="txt_id_etapa_estudio" value="<?php echo $this->session->userdata('Etapa_Estudio'); ?>">
                                             <!-- /Contenido del funcion -->
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_entregable" aria-labelledby="home-tab">
                                             <!-- /tabla de funcion desde el row -->
                                            <div class="row">

                                                  <div class="col-md-12 col-xs-12">
                                                        <div class="x_panel">
                                                      <ul class="bs-glyphicons-list">
                                                      <li>
                                                        <button type="button" id="btn_entregable" class="btn btn-primary" data-toggle="modal" data-target="#VentanaEntregable" >
                                                              <span class="glyphicon glyphicon-new-window" aria-hidden="true"> Nuevo</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ventanagant" >
                                                              <span class="glyphicon glyphicon-new-window" aria-hidden="true"> Gantt</span>
                                                        </button>
                                                        </li>
                                                       </ul>

                                                          <div class="x_content">

                                                                 
                                                                  <div class="table-responsive">
                                                                    <table id="table_entregable" class="table table-striped">
                                                                          <thead>
                                                                                <tr>
                                                                                  <td>ID entregable</td>
                                                                                   <td>Entregable</td>
                                                                                   <td>Responsable</td>
                                                                                   <td>Valorización</td>
                                                                                   <td>Avance</td>
                                                                                   <td>Actividad</td>
                                                                                  <td></td>
                                                                                </tr>
                                                                         </thead>
                                                                    </table>
                                                                  </div>
                                                                  <!-- end project list -->
                                                          </div>
                                                        </div>
                                                      </div>

                                            </div>
                                         <!-- / fin tabla de funcion desde el row -->
                                        </div>
                                        <!-- /fin del funcion del sector -->
                                        <div role="tabpanel" class="tab-pane fade" id="tab_tipo_inversion" aria-labelledby="profile-tab">

                                            <!-- /tabla de division funcional desde el row -->
                                            <div class="row">

                                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="x_panel">

                                                          <div class="x_title">
                                                            <ul class="nav navbar-right panel_toolbox">

                                                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                              </li>

                                                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                              </li>

                                                            </ul>
                                                           <div class="clearfix"></div>

                                                          </div>
                                                          <div class="x_content">
                                                            <table id="table-DivisionF" class="table table-striped table-bordered table-hover" ellspacing="0" width="100%">
                                                              <thead>
                                                                <tr>
                                                                </tr>
                                                              </thead>

                                                            </table>
                                                          </div>
                                                        </div>
                                                      </div>

                                            </div>
                                         <!-- / fin tabla division funcional desde el row -->
                                        </div>
                                          <!-- / fin panel grupo  funcional desde el row -->
                                        <div role="tabpanel" class="tab-pane fade" id="tab_Entregable" aria-labelledby="profile-tab">
                                             <!-- /tabla de grupo funcional desde el row -->
                                            <div class="row">

                                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="x_panel">
                                                            <button type="button" id="btn_nuevoGrupoFuncional" class="btn btn-primary" data-toggle="modal" data-target="#VentanaNivelEstudio">
                                                            <span class="fa fa-plus-circle"></span>
                                                                Nuevo</button>
                                                          <div class="x_title">

                                                            <ul class="nav navbar-right panel_toolbox">

                                                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                              </li>

                                                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                              </li>

                                                            </ul>
                                                            <div class="clearfix"></div>
                                                          </div>
                                                          <div class="x_content">

                                                            <table id="table-Entregable" class="table" ellspacing="0" width="100%">

                                                            </table>
                                                          </div>
                                                        </div>
                                                      </div>

                                            </div>
                                         <!-- / fin tabla grupo funcional asociados el row -->
                                        </div>
                                      </div>
                                    </div>



                  </div>
                </div>
              </div>
              <!-- /form input mask -->

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                       <h2>Calendario de Actividades</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                 <div class="x_content" id="contenidoActividadesFE">
                                      <div id='calendarActividadesFE'></div>
                                  </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                              <p class="text-muted font-13 m-b-30">
                            </p>

                            <table id="datatable-actividadesV" class="table" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Nombre</th>
                                  <th>Responsable</th>
                                  <th>Fecha Inicio</th>
                                  <th>Fecha Final</th>
                                  <th>Valoración</th>
                                  <th>Avance</th>
                                  <th></th>

                                </tr>
                              </thead>
                              <tbody>

                              </tbody>
                            </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <!-- /form color picker -->

<!--- agregar los  entregable-->
<div class="modal fade" id="VentanaEntregable" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Entregable de Estudio</h4>
        </div>
        <div class="modal-body">
                <div class="col-xs-12">
                <form class="form-horizontal " id="form-AddEntregable"  method="POST" >
                    <div class="row">
	                      <div class="col-md-12 col-sm-12 col-xs-12">
	                        <label>Componente</label> 
	                        <input id="txt_nombre_entre" name="txt_nombre_entre" type="text" class="form-control" autocomplete="off">
	                      </div>
	                      <div class="col-md-6 col-sm-6 col-xs-12">
	                      <label>Entregable</label>
	                          <select class="selectpicker" id="txt_denominacion_entre" mane="txt_denominacion_entre" class="selectpicker" data-live-search-normalize="true" data-live-search="true" data-container="body" data-header="Denominaciones"  title="Seleccionar Entregable"  >
	                            
	                          </select>
	                      </div>
                    </div>
                    <div class="row">
	                      <input type="hidden"  id="txt_denoMultiple" name="txt_denoMultiple" class="form-control">
	                      <div class="col-md-4">
	                        <label>Valoración</label>
	                        <input   id="txt_valoracion_entre" name="txt_valoracion_entre" class="form-control" autocomplete="off" data-validate-length-range="6" data-validate-words="2"  required="required" type="number" step='0.0'  placeholder="%" >
	                      </div>
	                      <div id="PorcentajeSuperado" style="text-align: right;color: red; margin-top: 25px;" class="col-md-4">
	                        	
	                      </div>
	                      <div id="PorcentajeRestanteValorizacion" style="text-align:center ;color:#008080; margin-top:30px;" class="col-md-4">
	                        	
	                      </div>
                     </div>

					         <div class="row">
	                     <div class="col-md-12 col-sm-12 col-xs-12 ">
	                        <label>Observación</label>
	                        <input id="txt_observacio_entre" name="txt_observacio_entre" type="text" class="form-control" name="msg">
	                      </div>
	                      <div class="col-md-12 col-sm-12 col-xs-12 ">
	                        <label>Levantamiento de Observación</label>
	                        <input id="txt_levantamintoO_entre" name="txt_levantamintoO_entre" type="text" class="form-control" name="msg">
	                      </div>
                     </div>

                       <div class="ln_solid"></div>
                      <div class="row" style="text-align: right;">
                        <div class="col-md-6 col-md-offset-3">

	                          <button  id="btn_entregableC"  name="btn_entregableC"  class="btn btn-success">
	                            <span class="glyphicon glyphicon-floppy-disk"></span>
	                            Guardar
	                          </button>
	                          <button  class="btn btn-danger" class="btn btn-danger" data-dismiss="modal">
	                             <span class="glyphicon glyphicon-remove"></span>
	                            Cancelar
	                          </button>

                        </div>
                      </div>

                </form>
            </div>
    
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

  <!--- agregar los  actividades-->
<div class="modal fade" id="VentanaActividades" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Actividades</h4>
        </div>
        <div class="modal-body">
         <div class="row">
                <div class="col-xs-12">
                <form class="form-horizontal " id="form-AddActividades_Entregable"  method="POST" >
                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 ">
                          <label>Actividad</label>
                          <input id="txt_id_entregable"  name="txt_id_entregable" type="hidden" class="form-control"  placeholder="" notValidate>
                          <input id="txt_nombre_act" name="txt_nombre_act" type="text" class="form-control"  placeholder="">
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12 ">
                          <label class=" col-md-6 col-sm-6 col-xs-12">Inicio</label>
                          <input id="txt_fechaActividadI" name="txt_fechaActividadI" type="date" class="form-control calendario">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 ">
                          <label class=" col-md-6 col-sm-6 col-xs-12">Final</label>
                          <input id="txt_fechaActividadf" name="txt_fechaActividadf" type="date" class="form-control calendario">
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-3 col-sm-3 col-xs-12">
	                        <label class="col-md-6 col-sm-6 col-xs-6">Valoración</label>
	                        <input class="form-control" id="txt_valoracionEAc" name="txt_valoracionEAc" class="form-control col-md-1 col-xs-1" data-validate-length-range="6" data-validate-words="2"  required="required" type="number" step='0.01'  placeholder="%">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-12">
    

		                    <div id="valoracionAvazadadActivi" style="text-align:center ;color:#008080; margin-left: 150px;margin-top:20px;" class="col-md-3 col-sm-3 col-xs-12"> 
		                    
		                    </div>

		                    
                      </div>
                   </div>
                   <div class="row">
                   	  <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Observación</label>
                        <input id="txt_observacio_EntreAc" name="txt_observacio_EntreAc" type="text" class="form-control" >
                      </div>
                   </div>
                  <div class="row">
                   
                       <div class="input-group demo2 colorpicker-element col-md-4 col-sm-4 col-xs-12" style="text-align: right;margin-left: 10px;margin-top: 10px;">
                             
                             <input type="text" value="#e01ab5" class="form-control" id="txt_ActividadColor" name="txt_ActividadColor">
                             <span class="input-group-addon"><i style="background-color: rgb(224, 26, 181);"></i></span>

                      </div>

                  </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                          <button  type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                            Guardar
                          </button>
                          <button id="btn_actividadC" type="submit" class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-remove"></span>
                            Cancelar
                          </button>

                        </div>
                      </div>

                </form>
            </div>
         </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

<!---Modificar eventos del calendar-->

  <div class="modal fade" id="modalEventoActividades" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="txt_NombreActividadTitle"></h4>
        </div>

         <div class="modal-body">
         <div class="row">
                <div class="col-xs-12">
                <form class="form-horizontal " id="form-UpdateActividades_Entregable"  method="POST" >
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <span class="input-group-addon">Actividad</span>
                        <input id="tx_IdActividad"  name="tx_IdActividad" type="hidden" class="form-control"  placeholder="" >
                        <input id="txt_idEntregable" name="txt_idEntregable" type="hidden" class="form-control"  placeholder="">
                        <input id="txt_NombreActividadAc" name="txt_NombreActividadAc" type="text" class="form-control"  placeholder="">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class=" col-md-6 col-sm-6 col-xs-12">Inicio</label>
                          <input id="txt_fechaActividadIAc" name="txt_fechaActividadIAc"  type="date" class="form-control calendario">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 ">
                          <label class=" col-md-6 col-sm-6 col-xs-12">Final</label>
                          <input id="txt_fechaActividadfAc"  name="txt_fechaActividadfAc" type="date" class="form-control calendario">
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <label class="col-md-3 col-sm-3 col-xs-12" >Avance</label>
                        <input type="hidden" class="form-control" id="txt_valorizacionEAct" name="txt_valorizacionEAct">
                        <input type="text" class="form-control" id="txt_avanceEAct" name="txt_avanceEAct" class="form-control col-md-1 col-xs-1" data-validate-length-range="6" data-validate-words="2"  required="required" type="number" step='0.01'  placeholder="%">

                      </div>
                    </div>

                     <div class="col-md-12 col-sm-12 col-xs-12 input-group">
                        <span class="input-group-addon">Observación</span>
                        <input id="txt_observacio_EntreAct" name="txt_observacio_EntreAct" type="text" class="form-control">
                      </div>

                      <div class="input-group demo2 colorpicker-element">
                             <input type="text" class="form-control" id="txt_ActividadColorAc" name="txt_ActividadColorAc">
                            <span class="input-group-addon"><i style="background-color: rgb(224, 26, 181);"></i></span>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                          <button  type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                            Guardar
                          </button>
                          <button type="submit" class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-remove"></span>
                            Cancelar
                          </button>

                        </div>
                      </div>




                </form>
            </div>
         </div>
        </div>

        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>


<!---Asignacion de persona a entregable-->
  <div class="modal fade" id="VentanaAsignacionPersonalEntregable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4> Responsable del entregable</h4>
        </div>

         <div class="modal-body">
         <div class="row">
                <div class="col-xs-12">
                      <div class="col-md-12 col-sm-12 col-xs-12 input-group">
                        
                      </div>
                          <div id="contenedor_responsable">
                               <table id="table_responsableFormulador" class="stripe row-border order-column nowrap" ellspacing="0" width="100%">
                                    <thead>
                                       <tr>
                                           <th></th>
                                           <td>ID persona</td>
                                           <td>Nombre</td>
                                           <td>Cargo</td>
                                           <td>Especialidad</td>
                                           <td>Grado Academico</td>
                                        </tr>
                                      </thead>
                                                                                 
                              </table>
                          </div>
              <form class="form-horizontal " id="form-AsignacionPersonalEntregable"  method="POST" >

                      <input type="hidden" class="form-control" id="txt_idPersona" name="txt_idPersona">
                      <input type="hidden" class="form-control" id="txt_identregable" name="txt_identregable">

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">

                          <button   type="submit"  class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                            Asignar
                          </button>
                          <button  type="submit"  class="btn btn-danger" data-dismiss="modal" >
                             <span class="glyphicon glyphicon-remove"></span>
                            Cancelar
                          </button>
                        </div>
                      </div>
               </form>
            </div>
         </div>
        </div>

        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

<!---Asignacion de persona a entregable-->
  <div class="modal fade" id="VentanaAsignacionPersonalActividad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h6> Responsable actividad</h6>
           <h6 class="modal-title" id="txt_NombreActividadTitleResponsable"></h6>
        </div>

         <div class="modal-body">
         <div class="row">
                <div class="col-xs-12">
                      <div class="col-md-12 col-sm-12 col-xs-12 input-group">
                      </div>
                          <div id="contenedor_responsable2">
                               <table id="table_responsableActividad" class="stripe row-border order-column nowrap" ellspacing="0" width="100%">
                                       <thead>
                                          <tr>
                                             <th></th>
                                             <td>ID persona</td>
                                             <td>Nombre</td>
                                             <td>Especialidad</td>
                                             <td>Grado Academico</td>
                                          </tr>
                                       <thead>
                              </table>
                          </div>
                 <form class="form-horizontal " id="form-AsignacionPersonalActividad"  method="POST" >
                      <input type="hidden" class="form-control" id="txt_idPersonaActividad" name="txt_idPersonaActividad">
                      <input type="hidden" class="form-control" id="txt_idActividadCronograma" name="txt_idActividadCronograma">

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                          <button  type="submit"  class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                            Asignar
                          </button>
                          <button  type="submit"  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-remove"></span>
                            Cancelar
                          </button>

                        </div>
                      </div>




                </form>
            </div>
         </div>
        </div>

        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

<!---lista de  responsable con sus entregables-->
  <div class="modal fade" id="VentenaResponsablesEntregable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4>Entregable:<label id="LabelEntregable"></label></h4>
          Responsables del entregable
        </div>

         <div class="modal-body">

              <table id="table_responsableEntregable" class="table datatable" ellspacing="0" width="100%">
                <thead>
                                <tr>
                                  <th>Responsable</th>
                                  <th>Dni</th>
                                  <th>Fecha Asignación</th>
                                </tr>
                  </thead>
                              <tbody>

                              </tbody>

              </table>

        </div>

        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
<!---fin lista de  responsable con sus entregables-->

<!-- venta gant -->
<div id="ventanagant" class="modal fade" role="dialog">
  <div class="modal-dialog-lag">

    <!-- Modal content-->
    <div class="modal-content" id="ProgramacionHorizontal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalle de programación</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="table-responsive">

                  <div class="x_content" style='height:100%;width:100%; padding:0px; margin:0px; overflow: hidden;'>
  <input value="Export to PDF" type="button" onclick='gantt.exportToPDF({ callback:show_result })' style='margin:20px;'>
  <input value="Export to PNG" type="button" onclick='gantt.exportToPNG({ callback:show_result })' style='margin:20px;'>
  <input value="Export to Excel" type="button" onclick='gantt.exportToExcel({ callback:show_result })' style='margin:20px;'>
  <input value="Export to iCal" type="button" onclick='gantt.exportToICal({ callback:show_result })' style='margin:20px;'>
  <div id="gantt_here" style='height:400px;width:100%; padding:10px; margin:0px;'></div>
  <script type="text/javascript">
    function show_result(info){
      if (!info)
        gantt.message({
          text:"Server error",
          type:"error",
          expire:-1
        });
      else
        gantt.message({
          text:"Stored at <a href='"+info.url+"'>export.dhtlmx.com</a>",
          expire:-1
        });
    }
    gantt.templates.task_text = function(s,e,task){
      return "" + task.text;
    }
    gantt.config.columns[0].template = function(obj){
      return obj.text + " -";
    }
    gantt.init("gantt_here");
    gantt.load(window.location.href);
  </script>

                  </div>
        </div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- fin venta gant-->
  <script>
 
     
    $(function()
    {
      $('#form-AddEntregable').formValidation(
      {
        framework: 'bootstrap',
        excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
        live: 'enabled',
        message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
        trigger: null,
        fields:
        {
          txt_nombre_entre:
          {
            validators: 
            {
              notEmpty:
              {
                message: '<b style="color: red;">El campo "Nombre de Componente" es requerido.</b>'
              },
              regexp:
	          {
	                regexp: "[a-zA-Z áéíóúÁÉÍÓÚñÑ]",
	                message: '<b style="color: red;">El campo "Nombre entregable" debe se texto.</b>'
	          }
            }
          },
           txt_valoracion_entre:
          {
            validators: 
            {
              notEmpty:
              {
                message: '<b style="color: red;">El campo "Valoración" es requerido.</b>'
              },
              regexp:
	          {
	                regexp: "^0*(?:[1-9][0-9]?|100)$",
	                message: '<b style="color: red;">El campo "Valoración" debe se numero mayor a 0 y menor o igual a 100.</b>'
	          }
            }
          },
          txt_fechaActividadI:
          {
            validators: 
            {
              notEmpty:
              {
                message: '<b style="color: red;">El campo "Valoración" es requerido.</b>'
              },
              regexp:
	          {
	                regexp: "^0*(?:[1-9][0-9]?|100)$",
	                message: '<b style="color: red;">El campo "Valoración" debe se numero mayor a 0 y menor o igual a 100.</b>'
	          }
            }
          }
        }
      });
    });
    $(function()
    {
      $('#form-AddActividades_Entregable').formValidation(
      {
        framework: 'bootstrap',
        excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
        live: 'enabled',
        message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
        trigger: null,
        fields:
        {
          txt_nombre_act:
          {
            validators: 
            {
              notEmpty:
              {
                message: '<b style="color: red;">El campo "Nombre Actividad" es requerido.</b>'
              },
              regexp:
	          {
	                regexp: "[a-zA-Z áéíóúÁÉÍÓÚñÑ]",
	                message: '<b style="color: red;">El campo "Nombre Actividad" debe se texto.</b>'
	          }
            }
          },
          txt_valoracionEAc:
          {
            validators: 
            {
              notEmpty:
              {
                message: '<b style="color: red;">El campo "Valoración" es requerido.</b>'
              },
              regexp:
	          {
	                regexp: "^0*(?:[1-9][0-9]?|100)$",
	                message: '<b style="color: red;">El campo "Valoración" debe se numero mayor a 0 y menor o igual a 100.</b>'
	          }
            }
          }


        }
      });
    });

  </script>
  <script>
  $('.modal').on('hidden.bs.modal', function(){ 
    $(this).find('form')[0].reset(); 
    $("label.error").remove();  
  });
</script>

