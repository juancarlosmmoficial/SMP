<style type="text/css">
  label{
    margin-top:5px;
  }
  #datatable-actividadesV {
    table-layout: fixed;
    text-overflow: ellipsis;
  }
  #datatable-actividadesV td {
    text-overflow: ellipsis;
  }
</style>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">

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
                                                                  <div id="TemEntregable">

                                                                  </div>
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
                        <input type="hidden" name="txtidEntregablePestana" id="txtidEntregablePestana">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" onclick="generarCalendarioPestniaCalendar();" role="tab" data-toggle="tab" aria-expanded="true"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
                        </li>
                      </ul><h5><label id="nombreEntregable"> </label></h5>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                 <div class="x_content" id="contenidoActividadesFE">
                                      <div id='calendarActividadesFE'></div>
                                  </div>
                        </div>
                        <div  role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <div id="TemActividad">

                            </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <!-- /form color picker -->

<!--- agregar los  entregable-->
<div class="modal fade" data-backdrop="static" id="VentanaEntregable" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Entregable de Estudio</h4>
        </div>
        <div class="modal-body">
                  <form class="form-horizontal " id="form-AddEntregable"  method="POST" >
                      <div class="col-md-12">
  	                      <div class="col-md-12 col-sm-12 col-xs-12">
  	                        <label>Componente</label>
  	                          <input id="txt_nombre_entre" name="txt_nombre_entre" type="text" class="form-control" placeholder="Componente" autocomplete="off">
  	                      </div>
  	                      <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-6 col-sm-6 col-xs-12"><label>Entregable</label></div>
  	                          <select class="selectpicker" id="txt_denominacion_entre" mane="txt_denominacion_entre" class="selectpicker" data-live-search-normalize="true" data-live-search="true" data-container="body" data-header="Denominaciones"  title="Seleccionar Entregable"  >

  	                          </select>
  	                      </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-6">
                                <label>Valoración</label>
                                <input   id="txt_valoracion_entre" name="txt_valoracion_entre" class="form-control" autocomplete="off" data-validate-length-range="6" data-validate-words="2"  required="required" type="number" step='0.0'  placeholder="%" >
                              </div>
                          </div>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                              <input type="hidden"  id="txt_denoMultiple" name="txt_denoMultiple" class="form-control">

                              <div id="PorcentajeSuperado" style="text-align: right;color: red; margin-top: 25px;" class="col-md-4">

                              </div>
                              <div id="PorcentajeRestanteValorizacion" style="text-align:center ;color:#008080; margin-top:30px;" class="col-md-4">

                              </div>
                          </div>
                      </div>
                  </form>
        </div>
        <div class="modal-footer">
         <div class="row" style="text-align: center;">
                          <div class="col-md-6 col-md-offset-3">

                              <button  id="btn_entregableC"  name="btn_entregableC"  class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                Guardar
                              </button>
                              <button  class="btn btn-danger" class="btn btn-danger" data-dismiss="modal">
                                 <span class="glyphicon glyphicon-remove"></span>
                                Cerrar
                              </button>
                          </div>
           </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModificarVentanaEntregable" data-backdrop="static" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar de Estudio</h4>
        </div>
        <div class="modal-body">
                  <form class="form-horizontal " id="form-modificarEntregable"  method="POST" >
                      <div class="col-md-12">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Componente</label>
                               <input id="EdiEntregable" name="EdiEntregable" type="hidden" notValidate >
                              <input id="Editxt_nombre_entre" name="Editxt_nombre_entre" type="text" class="form-control" placeholder="Componente" autocomplete="off">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-6 col-sm-6 col-xs-12"><label>Entregable</label></div>
                              <select class="selectpicker" id="Editxt_denominacion_entre" mane="Editxt_denominacion_entre" class="selectpicker" data-live-search-normalize="true" data-live-search="true" data-container="body" data-header="Denominaciones"  title="Seleccionar Entregable"  >

                              </select>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-6">
                                <label>Valoración</label>
                                <input   id="Editxt_valoracion_entre" name="Editxt_valoracion_entre" class="form-control" autocomplete="off" data-validate-length-range="6" data-validate-words="2"  type="number" step='0.0'  placeholder="%" >
                              </div>
                          </div>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                              <input type="hidden"  id="Editxt_denoMultiple" name="Editxt_denoMultiple" class="form-control">

                              <div id="PorcentajeSuperado" style="text-align: right;color: red; margin-top: 25px;" class="col-md-4">

                              </div>
                              <div id="PorcentajeRestanteValorizacionModificar" style="text-align:right ;color:#008080; margin-top:30px;" class="col-md-7">

                              </div>
                          </div>
                      </div>
                  </form>
        </div>
        <div class="modal-footer">
         <div class="row" style="text-align: center;">
                          <div class="col-md-6 col-md-offset-3">

                              <button  id="editarbtn_entregableC"  name="editarbtn_entregableC"  class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                Guardar
                              </button>
                              <button  class="btn btn-danger" class="btn btn-danger" data-dismiss="modal">
                                 <span class="glyphicon glyphicon-remove"></span>
                                Cerrar
                              </button>
                          </div>
           </div>
        </div>
      </div>
    </div>
  </div>

  <!--- agregar los  actividades-->
<div class="modal fade" data-backdrop="static" id="VentanaActividades" data-backdrop="static" role="dialog">
    <div class="modal-dialog modal-lg">
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
                            <div class="row"></br></br>
                                  <div class="input-prepend input-group col-md-5 col-sm-5 col-xs-5" style="margin-left: 8px;">
                                            <span class="add-on input-group-addon">Fecha Actividad <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                            <input type="text"  name="FechaActividad" id="FechaActividad" class="form-control" value=""/>
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: -70px;margin-left: 400px;">
            	                        <label class="col-md-6 col-sm-6 col-xs-6">Valoración</label>
            	                        <input class="form-control" id="txt_valoracionEAc" name="txt_valoracionEAc" class="form-control col-md-1 col-xs-1" data-validate-length-range="6" data-validate-words="2"  required="required" type="number" step='0.01'  placeholder="%">
                                  </div>
                                  <div class="col-md-5 col-sm-5 col-xs-5" style="margin-top: -70px;margin-left: 460px;">
            		                     <div id="valoracionAvazadadActivi" style="text-align:center ;color:#008080; margin-left: 150px;margin-top:39px;" class="col-md-7 col-sm-7 col-xs-12">
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
                    </form>
                  </div>
             </div>
        </div>
        <div class="modal-footer" style="float: center">
              <button  id="btn_Addactividad" class="btn btn-success">
                <span class="glyphicon glyphicon-floppy-disk"></span>
                Guardar
              </button>
              <button id="btn_actividadC"  class="btn btn-danger" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove"></span>
                Cerrar
              </button>
        </div>
      </div>
    </div>
  </div>

<!---Modificar eventos del calendar-->

  <div class="modal fade" id="modalEventoActividades" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h5 class="modal-title">Modificar Actividad</h5>
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
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <label class=" col-md-6 col-sm-6 col-xs-12">Inicio y Final de la Actividad </label>
                          <input type="hidden" id="txt_fechaActividadIAc" name="txt_fechaActividadIAc"  type="date" class="form-control calendario">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 ">
                          <label class=" col-md-6 col-sm-6 col-xs-12"></label>
                          <input type="hidden" id="txt_fechaActividadfAc"  name="txt_fechaActividadfAc" type="date" class="form-control calendario">
                      </div>
                      <div class="input-prepend input-group col-md-10 col-sm-10 col-xs-10" style="margin-left: 8px;">
                                            <span class="add-on input-group-addon">Fecha de actividad <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                            <input type="text"  name="FechaActividadCalendar" id="FechaActividadCalendar" class="form-control" value=""/>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <label class="col-md-3 col-sm-3 col-xs-12" >Avance</label>
                        <input type="hidden" class="form-control" id="txt_valorizacionEAct" name="txt_valorizacionEAct">
                        <input type="text" class="form-control" id="txt_avanceEAct" name="txt_avanceEAct" class="form-control col-md-1 col-xs-1" data-validate-length-range="6" data-validate-words="2"  required="required" type="number" step='0.01'  placeholder="%">

                      </div>
                    </div><br/>

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
                              Cerrar
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

<!-- -->

<!--MOFIFICAR ACTIVIDADES DE ENTREGABLES-->
  <div class="modal fade" id="modalModificarActividades" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h5 class="modal-title">Modificar Actividad </h5>
        </div>

         <div class="modal-body">
         <div class="row">
                <div class="col-xs-12">
                <form class="form-horizontal " id="form-ActualizarActividadEntregable"  method="POST" >
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <span class="input-group-addon">Nombre Actividad</span>
                        <input id="tx_IdActividad"  name="tx_IdActividad" type="hidden" class="form-control"  placeholder="" >
                        <input id="txt_idEntregable" name="txt_idEntregable" type="hidden" class="form-control"  placeholder="">
                        <input id="txt_NombreActividadAc" name="txt_NombreActividadAc" type="text" class="form-control"  placeholder="">
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <label class=" col-md-6 col-sm-6 col-xs-12">Inicio y Final de la Actividad </label>
                          <input type="hidden" id="txt_fechaActividadIAc" name="txt_fechaActividadIAc"  type="date" class="form-control calendario">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 ">
                          <label class=" col-md-6 col-sm-6 col-xs-12"></label>
                          <input type="hidden" id="txt_fechaActividadfAc"  name="txt_fechaActividadfAc" type="date" class="form-control calendario">
                      </div>
                      <div class="input-prepend input-group col-md-10 col-sm-10 col-xs-10" style="margin-left: 8px;">
                                            <span class="add-on input-group-addon">Fecha de actividad <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                            <input type="text"  name="FechaActividadCalendar" id="FechaActividadCalendar" class="form-control" value=""/>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <label class="col-md-3 col-sm-3 col-xs-12" >Avance</label>
                        <input type="hidden" class="form-control" id="txt_valorizacionEAct" name="txt_valorizacionEAct">
                        <input type="text" class="form-control" id="txt_avanceEAct" name="txt_avanceEAct" class="form-control col-md-1 col-xs-1" data-validate-length-range="6" data-validate-words="2"  required="required" type="number" step='0.01'  placeholder="%">

                      </div>
                    </div><br/>

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
                            Cerrar
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
<!--FIN MOFIFICAR ACTIVIDADES DE ENTREGABLES-->

<div class="modal fade" id="modalObservacionesActividades" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h5 class="modal-title">Observación de Actividad</h5>
        </div>

         <div class="modal-body">
         <div class="row">
                <div class="col-xs-12">
                <form class="form-horizontal " id="form-ObservacionesActividades" enctype="multipart/form-data" method="POST" >
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <span class="input-group-addon" style="text-align:left;">Descripción Observación</span>
                        <input id="tx_IdActividadObser"  name="tx_IdActividadObser" type="hidden" class="form-control"  placeholder="" >
                        <input id="txt_desco_obs" name="txt_desco_obs" type="text" class="form-control"  placeholder="">
                      </div>
                    </div><br/>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input  id="NombreUrlObservacion" name="NombreUrlObservacion"  type="hidden">
                                 <input type="file" name="urlDocumentoObservacion" id="urlDocumentoObservacion" >
                          </div>
                    </div>
                    <div class="form-group" style="margin-top: 30px;margin-left: 10px;"><br/>
                          <div class="col-md-6 col-md-offset-3">

                            <button  id="btn_observacion" name="btn_observacion" class="btn btn-success">
                              <span class="glyphicon glyphicon-floppy-disk"></span>
                              Guardar
                            </button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal">
                               <span class="glyphicon glyphicon-remove"></span>
                              Cerrar
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

<!--  -->

<!--  -->

<div class="modal fade" id="LevatarmodalObservacionesLevantar" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h5 class="modal-title">Levantar Observación de Actividad</h5>
        </div>

         <div class="modal-body">
         <div class="row">
                <div class="col-xs-12">
                <form class="form-horizontal " id="form-ObservacionesActividadesLevantamiento" enctype="multipart/form-data" method="POST" >
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <span class="input-group-addon" style="text-align:left;">Descripción Levantamiento</span>
                        <input id="tx_IdActividadLevantamiento"  name="tx_IdActividadLevantamiento" type="hidden" class="form-control"  placeholder="" >
                        <input id="txt_desco_levantamiento" name="txt_desco_levantamiento" type="text" class="form-control"  placeholder="">
                      </div>
                    </div><br/>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input  id="NombreUrlObservacionLevantamiento" name="NombreUrlObservacionLevantamiento"  type="hidden">
                                 <input type="file" name="urlDocumentoObservacionlevantamiento" id="urlDocumentoObservacionlevantamiento" >
                          </div>
                    </div>
                    <div class="form-group" style="margin-top: 30px;margin-left: 10px;"><br/>
                          <div class="col-md-6 col-md-offset-3">

                            <button  id="btn_observacionLevantamiento" name="btn_observacionLevantamiento" class="btn btn-success">
                              <span class="glyphicon glyphicon-floppy-disk"></span>
                              Guardar
                            </button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal">
                               <span class="glyphicon glyphicon-remove"></span>
                              Cerrar
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

  <div class="modal fade" id="ListaObservaciones" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h5 class="modal-title">Listados de Observación</h5>
        </div>

         <div class="modal-body">
         <div class="row">
             <div id="TemActividadObservaciones" class="col-xs-12">

              </div>
         </div>
        </div>

        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

<!--  -->
<!---Asignacion de persona a entregable-->
  <div class="modal fade" id="VentanaAsignacionPersonalEntregable" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                               <table id="table_responsableFormulador" class="table table-striped jambo_table bulk_action  table-hover" cellspacing="0" width="100%">
                                    <thead>
                                       <tr>
                                           <th></th>
                                           <td>ID persona</td>
                                           <td>Nombre</td>
                                           <td>Cargo</td>
                                           <td>Especialidad</td>

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
                            Cerrar
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
  <div class="modal fade" id="VentanaAsignacionPersonalActividad" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                               <table id="table_responsableActividad" class="table table-striped jambo_table bulk_action  table-hover" cellspacing="0" width="100%">
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
                            Cerrar
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
  <div class="modal fade" id="VentenaResponsablesEntregable" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4>Entregable:<label id="LabelEntregable"></label></h4>
          Responsables del entregable
        </div>

         <div class="modal-body">

              <table id="table_responsableEntregable" class="table table-striped jambo_table bulk_action  table-hover" cellspacing="0" width="100%">
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
      $('#form-modificarEntregable').formValidation(
      {
        framework: 'bootstrap',
        excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
        live: 'enabled',
        message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
        trigger: null,
        fields:
        {
          Editxt_nombre_entre:
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
           editxt_valoracion_entre:
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
