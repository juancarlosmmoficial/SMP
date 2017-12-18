<style>
  #table-ProyectoInversionProgramado > tbody > tr > td
  {
    vertical-align: middle;
  }
  #table_no_pip>tbody>tr>td:nth-child(0n+4)
  {
    text-align: right;
  }
  .btn-group .btn, .btn-group-vertical .btn {
    margin-bottom: 0;
    margin-right: 0;
    width: 160px !important;
  }
  .btn {
    border-radius: 0px !important;
  }
</style>
<div class="right_col" role="main">
    <div class="">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>BANCO DE INVERSIONES NO PI</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <button id="btn_nuevoNoPip" name="btn_nuevoNoPip" style="margin-top: 5px;margin-bottom: 15px;" type="button" class="btn btn-primary " data-toggle="modal" data-target="#VentanaRegistraPIP">  <span class="fa fa-plus-circle"></span> Nuevo </button>
                    <div class="table-responsive">
                        <table id="table_no_pip" class="table table-striped jambo_table bulk_action  table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 8%"><i class="fa fa-thumb-tack"></i> Cod. </th>
                                    <th style="width: 32%"><i class="fa fa-bookmark-o"></i> Nombre</th>
                                    <th style="width: 12%; text-align: right;"><i class="fa fa-money"></i> Costo</th>
                                    <th style="width: 12%"><center>Tipo</center></th>
                                    <th style="width: 10%">Opción</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


<!-- modal -->

<!-- /. INICIO VENTANA REGISTRAR PROYECTOS DE INVERSIÓN-->
<div class="modal fade" id="VentanaRegistraPIP" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
            Registrar No PIP</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-xs-12">
            <form class="form-horizontal" id="form-AddProyectosInversion" action="" method="POST" >
                <div id="validarRegistroNoPip">
                                 <div class="row">
                                      <div class="col-md-4">
                                            <div class="col-md-7 col-sm-6 col-xs-12">
                                            <label for="name">Codigo Único<span class="required">*</span>
                                            </label>
                                                  <input id="txtCodigoUnico" name="txtCodigoUnico"  class="form-control col-md-7 col-xs-5" placeholder="Codigo Unico" type="text" maxlength="10">
                                             </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                           <label  for="textbox"><span class="required">Ciclo Inversión</span>
                                            </label>
                                          <select id="cbxEstCicInv_" name="cbxEstCicInv_" class="selectpicker"  title="Elija Ciclo de Inversión" >
                                          </select>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="col-md-6 col-sm-6 col-xs-12" style="display: none">
                                            <label  for="name">Tipo inversion<span class="required">*</span>
                                            </label>
                                            <select id="cbx" name="cbx" class="selectpicker" >
                                              <option selected value="2">NO PIP</option>
                                            </select>
                                         </div>
                                      </div>
                                    </div>


                                 <div class="row">
                                      <div class="col-md-12">
                                        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="name">Inversion<span class="required"></span>
                                        </label>
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                          <input id="txtNombrePip" name="txtNombrePip" class="form-control col-md-12 col-xs-5" placeholder="Nombre Inversion" type="text">
                                        </div>
                                      </div>
                                 </div>
                                 <hr>
                               <div class="row">
                                      <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                             <label  for="textbox"><span class="required">Nivel de Gobierno</span>
                                        </label>
                                            <select id="cbxNivelGob" name="cbxNivelGob" class="selectpicker"  title="Elija nivel de gobierno">
                                            </select>
                                            </div>
                                      </div>
                                       <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Unidad Ejecutora</span>
                                                </label>
                                                <select id="cbxUnidadEjecutora"  name="cbxUnidadEjecutora" class="selectpicker"   title="Elija Unidad Ejecutora">
                                                </select>
                                            </div>
                                      </div>
                                       <div class="col-md-4">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label for="name" style="text-align:left">Función<span class="required">*</span></label>
                                        <select id="cbxFuncion" name="cbxFuncion" class="selectpicker" title="Elija función"></select>
                                    </div>
                                </div>
                              </div>



                            <div class="row">

                                <div class="col-md-4">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label  for="textbox"><span class="required">División</span></label>
                                        <select id="cbxDivFunc" name="cbxDivFunc" class="selectpicker" title="Elija división" disabled="disabled"></select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label for="textbox"><span class="required">Grupo</span></label>
                                        <select id="cbxGrupoFunc" name="cbxGrupoFunc" class="selectpicker"  title="Elija grupo" disabled="disabled"></select>
                                    </div>
                                </div>
                            </div>
                                   <div class="row">
                                      <div class="col-md-4">

                                            <div class="col-md-11 col-sm-6 col-xs-12">
                                            <label  for="name">Costo de Inversion<span class="required">*</span>
                                        </label>
                                            <input id="txtCostoPip" name="txtCostoPip" class="form-control col-md-7 col-xs-5" data-validate-length-range="20" data-validate-words="2" placeholder="Costo de inversion" type="text" maxlength="12">
                                         </div>
                                      </div>
                                       <div class="col-md-4">
                                           <div class="col-md-11 col-sm-6 col-xs-12">
                                             <label for="textbox"><span class="required">Número de beneficiarios</span>
                                             </label>
                                              <input id="txt_beneficiarios" name="txt_beneficiarios" class="form-control col-md-7 col-xs-7" data-validate-length-range="20" data-validate-words="2" placeholder="Número de beneficiarios" type="text">
                                            </div>
                                      </div>
                                      <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label  for="name">Fuente Finan.<span class="required">*</span>
                                            </label>
                                            <select id="cbxFuenteFinanc" name="cbxFuenteFinanc" class="selectpicker" title="Elija fuente de financiamiento">
                                            </select>
                                         </div>
                                      </div>
                              </div>

                                  <div class="row">
                                      <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                             <label for="textbox"><span class="required">Rubro Ejecucion</span>
                                             </label>
                                            <select id="cbxRubro" name="cbxRubro"  class="selectpicker"  title="Elija Rubro">
                                            </select>
                                            </div>
                                      </div>
                                       <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Modalidad</span>
                                                </label>
                                                 <select id="cbxModalidadEjec" name="cbxModalidadEjec" class="selectpicker"   title="Elija Modalidad de Ejecucion">
                                                </select>
                                            </div>
                                      </div>
                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label  for="name">Tipología NO PIP<span class="required">*</span>
                                            </label>
                                              <select id="Cbx_TipoNoPip_i" name="Cbx_TipoNoPip_i" class="selectpicker"  title="Elija Programa presupuestal">
                                            </select>
                                         </div>
                                      </div>
                              </div>
                               <div class="row">
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label  for="name">Estado<span class="required">*</span>
                                            </label>
                                            <select id="cbx_estado" name="cbx_estado" class="selectpicker">
                                              <option value="1">Activo</option>
                                              <option value="0">Inactivo</option>
                                            </select>
                                         </div>
                                      </div>
                              </div>
                              </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <center>
                          <button id="send" type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                            Guardar
                          </button>
                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-remove"></span>
                            Cerrar
                          </button>
                          </center>
                        </div>
                      </div>
                </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.FIN VENTANA REGISTRAR PROYECTOS DE INVERSION-->

<!-- /. INICIO VENTANA EDITAR PROYECTOS DE INVERSIÓN-->
<div class="modal fade" id="venta_editar_proyecto" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          Editar No PIP</h4>
        </div>
        <div class="modal-body">
        <div class="row">
        <div class="col-xs-12">
            <form class="form-horizontal " id="form_Edit_no_pip"   action="" method="POST" >
                <input id="txt_idNo_Pip" name="txt_idNo_Pip" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="ID" required="required" type="hidden">
                <div id="validarEdicionNoPip">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <label for="name">Codigo Único<span class="required">*</span></label>
                            <input id="txtCodigoUnico_m" name="txtCodigoUnico_m"  class="form-control col-md-7 col-xs-5" placeholder="Codigo Unico" required="required" type="text" maxlength="10">
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <label  for="textbox"><span class="required">Ciclo Inversión</span></label>
                              <select id="cbxEstCicInv_m" name="cbxEstCicInv_m" class="selectpicker"  >
                              </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-md-6 col-sm-6 col-xs-12" style="display: none">
                          <label  for="name">Tipo inversión<span class="required">*</span></label>
                          <select id="cbx_tipo_no_pip_m" name="cbx_tipo_no_pip_m" class="selectpicker" >
                              <option selected value="2">NO PIP</option>
                          </select>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="name">Inversion<span class="required"></span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="txtNombrePip_m" name="txtNombrePip_m" class="form-control col-md-12 col-xs-5" placeholder="Nombre Inversion" required="required" type="text">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label  for="textbox"><span class="required">Nivel de Gobierno</span></label>
                            <select id="cbxNivelGob_m" name="cbxNivelGob_m" class="selectpicker" >
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label  for="textbox"><span class="required">Unidad Ejecutora</span></label>
                            <select id="cbxUnidadEjecutora_m"  name="cbxUnidadEjecutora_m" class="selectpicker">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="name" style="text-align:left">Función<span class="required">*</span></label>
                            <select id="cbxFuncion_m" name="cbxFuncion_m" class="selectpicker" ></select>
                        </div>
                    </div>
                </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label  for="textbox"><span class="required">División</span></label>
                                        <select id="cbxDivFunc_inicio" name="cbxDivFunc_inicio" class="selectpicker"></select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label for="textbox"><span class="required">Grupo</span></label>
                                        <select id="cbxGrupoFunc_m" name="cbxGrupoFunc_m" class="selectpicker"></select>
                                    </div>
                                </div>
                            </div>

                                  <hr>
                                   <div class="row">
                                      <div class="col-md-4">

                                            <div class="col-md-11 col-sm-6 col-xs-12">
                                            <label  for="name">Costo de Inversion<span class="required">*</span>
                                        </label>
                                            <input id="txtCostoPip_m" name="txtCostoPip_m" class="form-control col-md-7 col-xs-5" data-validate-length-range="6" data-validate-words="2" placeholder="Costo de inversion" required="required" type="text" maxlength="12">
                                         </div>
                                      </div>
                                       <div class="col-md-4">
                                           <div class="col-md-11 col-sm-6 col-xs-12">
                                             <label for="textbox"><span class="required">Número de beneficiarios</span>
                                             </label>
                                              <input id="txt_beneficiarios_m" name="txt_beneficiarios_m" class="form-control col-md-7 col-xs-7" data-validate-length-range="6" data-validate-words="2" placeholder="Número de beneficiarios" required="required" type="number">
                                            </div>
                                      </div>
                                      <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label  for="name">Fuente Finan.<span class="required">*</span>
                                            </label>
                                            <select id="cbxFuenteFinanciamiento_m" name="cbxFuenteFinanciamiento_m" class="selectpicker" >
                                            </select>
                                         </div>
                                      </div>
                              </div>

                                  <div class="row">
                                      <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                             <label for="textbox"><span class="required">Rubro Ejecucion</span>
                                             </label>
                                              <select id="cbxRubroEjecucion_m" name="cbxRubroEjecucion_m" class="selectpicker" >
                                              </select>
                                            </div>
                                      </div>
                                       <div class="col-md-4">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Modalidad</span>
                                                </label>
                                                 <select id="cbxModalidadEjecucion_m" name="cbxModalidadEjecucion_m" class="selectpicker"  >
                                                </select>
                                            </div>
                                      </div>
                                         <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label  for="name">Tipología NO PIP<span class="required">*</span>
                                            </label>
                                              <select id="Cbx_TipoNoPip_m" name="Cbx_TipoNoPip_m" class="selectpicker"  >
                                            </select>
                                         </div>
                                      </div>
                              </div>
                               <div class="row">
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label  for="name">Estado<span class="required">*</span>
                                            </label>
                                            <select id="cbx_estado_m" name="cbx_estado_m" class="selectpicker">
                                              <option value="1">Activo</option>
                                              <option value="0">Inactivo</option>
                                            </select>
                                         </div>
                                      </div>
                              </div>
                        </div>

                    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <center>
                          <button id="send" type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                            Guardar
                          </button>
                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-remove"></span>
                            Cerrar
                          </button>
                          </center>
                        </div>
                      </div>
                    </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.FIN VENTANA EDITAR PROYECTOS DE INVERSION-->

<!-- /.ventana Asignar  ubicacion geográfica-->
<div class="modal fade" id="venta_ubicacion_geografica" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          Ubicación Geográfica </h4>
        </div>
        <div class="modal-body">
         <div class="row">
                    <div class="col-xs-12">
                                        <!-- PAGE CONTENT BEGINS -->
              <form class="form-horizontal " id="form_AddUbigeo"   action="<?php echo base_url(); ?>bancoproyectos/Get_ubigeo_pip" method="POST" >

                <input id="txt_id_pip" name="txt_id_pip" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="ID" required="required" type="hidden">

               <div class="item form-group">
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div style="margin-left: 750px;position: absolute;">
                                             <li><a target="_blank" href="http://www.coordenadas-gps.com/latitud-longitud/-13.613956/-72.902527/8/roadmap"><i class='fa fa-map-marker red' aria-hidden='true'> Mapa</i></a></li>
                                        </div>

                                        <div class=".col-xs-12 .col-md-12">
                                            <label for="name">Proyecto:</label>
                                        </div>
                                        <textarea class="form-control" rows="2" readonly="readonly" id="nombreProyecto" name="nombreProyecto"></textarea>
                                        <br>
                                    </div>
                                   <div class="col-md-4">
                                           <label for="name">Departamento.<span class="required"></span>
                                            </label>
                                                 <select  class="selectpicker" disabled="disabled">
                                                    <option value="Apurímac">Apurímac</option>
                                                 </select>
                                    </div>

                                     <div class="col-md-4">
                                           <label for="name">Provincia.<span class="required"></span>
                                            </label>
                                               <select  id="cbx_provincia"  name="cbx_provincia" class="selectpicker"  title="Elija provincia(s)"></select>
                                    </div>


                                     <div class="col-md-4">
                                           <label for="name">Distritos.<span class="required"></span>
                                            </label>
                                              <select name="cbx_distrito" id="cbx_distrito" data-live-search="true"  class="selectpicker" title="Elija distrito"></select>
                                    </div>
                                    <div class="col-md-3">
                                          <div class=".col-xs-3 .col-md-10">
                                          <br>
                                           <label for="name">Latitud<span class="required"></span>
                                            </label>
                                                  <input id="txt_latitud" name="txt_latitud"  class="form-control col-md-1 col-xs-1" data-validate-length-range="6" data-validate-words="2" placeholder="Latitud" required="required" type="text">
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                          <div class=".col-xs-3 .col-md-10">
                                          <br>
                                           <label for="name">Longitud<span class="required"></span>
                                            </label>
                                                  <input id="txt_longitud" name="txt_longitud"  class="form-control col-md-1 col-xs-1" data-validate-length-range="6" data-validate-words="2" placeholder="Longitud" required="required" type="text">
                                          </div>
                                    </div>
                                    <div class="col-md-2">
                                          <div class=".col-xs-3 .col-md-10">
                                          <br>
                                           <label for="name"><br/>Adjuntar Imagen: <span class="required"></span>
                                            </label>
                                             <input type="file" name="ImgUbicacion" required="required">

                                          </div>
                                    </div>
                                    <div class="col-md-2" style="margin-left: 70px;">
                                    <BR><BR><BR>


                                    </div>

                                          <div class="col-md-2" style="margin-left: 130px;margin-top: -50px;">
                                          <BR><BR>
                                           <label for="name"> <span class="required"></span>
                                            </label>
                                             <button id="send" type="submit" class="btn btn-success">
                                             <span class="glyphicon glyphicon-floppy-saved"></span>Agregar
                                            </button>
                                          </div>
                      </div>
                     <div class="x_panel" style="border: 1px solid #EEEEEE;">
                    <center>
                    <table id="TableUbigeoProyecto_x" class="table table-striped jambo_table bulk_action  table-hover" cellspacing="0" width="100%" >
                    <thead >
                       <tr>
                         <th style="width: 20%" ><i class="fa fa-thumb-tack"></i> Provincia</th>
                         <th style="width: 20%" ><i class="fa fa-thumb-tack"></i> Distrito</th>
                         <th style="width: 20%" ><i class="fa fa-thumb-tack"></i> Latitud</th>
                         <th style="width: 20%" ><i class="fa fa-thumb-tack"></i> Longitud</th>
                         <th style="width: 10%" ><i class="fa fa-thumb-tack"></i> Imagen</th>
                         <th style="width: 50%" ><i class="fa fa-thumb-tack"></i> </th>
                      </tr>
                    </thead>
                    </table>
                    </center>
                    </div>
                    <center>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-log-out"></span>
                            Cerrar
                          </button>
                        </div>
                      </div>
                      </center>

                    </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.fin de  ventana ubicacion geografica-->


<!-- /.ventana registar nuevo estado ciclo-->
<div class="modal fade" id="ventana_ver_estado_ciclo" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          Estado Ciclo PI </h4>
        </div>
        <div class="modal-body">
         <div class="row">
                    <div class="col-xs-12">
                                        <!-- PAGE CONTENT BEGINS -->
              <form class="form-horizontal " id="form_AddEstadoCiclo"   action="<?php echo base_url(); ?>bancoproyectos/listar_estados" method="POST" >

                        <input id="txt_id_pip_Ciclopi" name="txt_id_pip_Ciclopi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="ID" required="required" type="hidden">
                               <div class="item form-group">
                                    <div class="col-md-12">
                                        <label for="name">Proyecto:<span class="required"></span></label>
                                        <div class="col-md-12">
                                            <textarea readonly="readonly" name="nombreProyectoCiclo" id="nombreProyectoCiclo" rows="2" class="form-control"></textarea>
                                            <br>
                                        </div>
                                    </div>

                                     <div class="col-md-4">

                                           <label for="name">Estado.<span class="required"></span>
                                            </label>
                                                 <select   id="Cbx_EstadoCiclo" name="Cbx_EstadoCiclo" class="selectpicker form-control col-md-12 col-xs-12" data-live-search="true"  title="Buscar Estado...">
                                                </select>
                                    </div>
                                          <div class="col-md-4">

                                           <label for="name">Fecha <span class="required"></span>
                                            </label>
                                                  <input type="date" id="dateFechaIniC" name="dateFechaIniC" class="form-control col-md-6 col-xs-5" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo date("Y-m-d"); ?>" disabled="true">
                                          </div>
                                          <div class="col-md-4">
                                             <label for="name">. <span class="required"></span>
                                             </label><BR>
                                             <button id="send" type="submit" class="btn btn-success">
                                             <span class="glyphicon glyphicon-floppy-saved"></span>Agregar
                                             </button>
                                          </div>
                      </div>

                     <div class="ln_solid"></div>
                     <div class="x_panel" style="background-color: #EEEEEE;">
                    <center>
                    <table  id="Table_Estado_Ciclo" class="table   table-hover" >
                    <thead >
                       <tr>
                         <th  ><i class="fa fa-thumb-tack"></i> Estado Ciclo</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Fecha</th>
                      </tr>
                    </thead>
                    </table>
                    </center>
                    </div>
                    <center>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-log-out"></span>
                            Cerrar
                          </button>
                        </div>
                      </div>
                      </center>

                    </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.fin de  ventana gestionar ciclo de inversión-->
<!-- /.ventana registar Rubro-->
<div class="modal fade" id="venta_registar_rubro" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          Rubro PI </h4>
        </div>
        <div class="modal-body">
         <div class="row">
                    <div class="col-xs-12">
                                        <!-- PAGE CONTENT BEGINS -->
              <form class="form-horizontal " id="form_AddRubro"   action="<?php echo base_url(); ?>bancoproyectos/listar_rubro" method="POST" >

                        <input id="txt_id_pip_RubroPI" name="txt_id_pip_RubroPI" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="ID" required="required" type="hidden">      <div class="item form-group">
                                    <div class="col-md-12">
                                        <label for="name">Proyecto:<span class="required"></span></label>
                                        <div class="col-md-12">
                                            <textarea readonly="readonly" name="nombreProyectoRubro" id="nombreProyectoRubro" rows="2" class="form-control"></textarea>
                                            <br>
                                        </div>
                                    </div>
                                     <div class="col-md-4">

                                           <label for="name">Rubro.<span class="required"></span>
                                            </label>
                                                 <select   id="Cbx_RubroPI" name="Cbx_RubroPI" class="selectpicker form-control col-md-12 col-xs-12" data-live-search="true"  title="Buscar Rubro...">
                                                </select>
                                    </div>
                                          <div class="col-md-4">
                                           <label for="name">Fecha <span class="required"></span>
                                            </label>
                                                  <input type="date" id="dateFechaIniC" name="dateFechaIniC" class="form-control col-md-6 col-xs-5" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo date("Y-m-d"); ?>" disabled="true">
                                          </div>
                                          <div class="col-md-4">
                                             <label for="name">. <span class="required"></span>
                                             </label><BR>
                                             <button id="send" type="submit" class="btn btn-success">
                                             <span class="glyphicon glyphicon-floppy-saved"></span>Agregar
                                             </button>
                                          </div>
                      </div>

                     <div class="ln_solid"></div>
                     <div class="x_panel" style="background-color: #EEEEEE;">
                    <center>
                    <table  id="Table_RubroPI" class="table   table-hover" >
                    <thead >
                       <tr>
                         <th  ><i class="fa fa-thumb-tack"></i> Estado Ciclo</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Fecha</th>
                      </tr>
                    </thead>
                    </table>
                    </center>
                    </div>
                    <center>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-log-out"></span>
                            Cerrar
                          </button>
                        </div>
                      </div>
                      </center>

                    </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.fin  ventana registar Rubro-->
<!-- /.Ventana Registar MOdalidad de Ejecucion -->
<div class="modal fade" id="ventanaModalidadEjecucion" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          Modalidad de Ejecución </h4>
        </div>
        <div class="modal-body">
         <div class="row">
                    <div class="col-xs-12">
                                        <!-- PAGE CONTENT BEGINS -->
              <form class="form-horizontal " id="form_AddModalidadEjec"   action="<?php echo base_url(); ?>bancoproyectos/listar_modalidad_ejec" method="POST" >

                        <input id="txt_id_pip_ModalidadEjec" name="txt_id_pip_ModalidadEjec" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="ID" required="required" type="hidden">
                               <div class="item form-group">
                                    <div class="col-md-12">
                                        <label for="name">Proyecto:<span class="required"></span></label>
                                        <div class="col-md-12">
                                            <textarea readonly="readonly" name="nombreProyectoModalidad" id="nombreProyectoModalidad" rows="2" class="form-control"></textarea>
                                            <br>
                                        </div>
                                    </div>
                                     <div class="col-md-4">

                                           <label for="name">Modalidad.<span class="required"></span>
                                            </label>
                                                 <select   id="Cbx_ModalidadEjec" name="Cbx_ModalidadEjec" class="selectpicker form-control col-md-12 col-xs-12" data-live-search="true"  title="Buscar Modalidad...">
                                                </select>
                                    </div>
                                          <div class="col-md-4">
                                           <label for="name">Fecha <span class="required"></span>
                                            </label>
                                                  <input type="date" id="dateFechaIniC" name="dateFechaIniC" class="form-control col-md-6 col-xs-5" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo date("Y-m-d"); ?>" disabled="true">
                                          </div>
                                          <div class="col-md-4">
                                             <label for="name">. <span class="required"></span>
                                             </label><BR>
                                             <button id="send" type="submit" class="btn btn-success">
                                             <span class="glyphicon glyphicon-floppy-saved"></span>Agregar
                                             </button>
                                          </div>
                      </div>

                     <div class="ln_solid"></div>
                     <div class="x_panel" style="background-color: #EEEEEE;">
                    <center>
                    <table  id="Table_ModalidadPI" class="table   table-hover" >
                    <thead >
                       <tr>
                         <th  ><i class="fa fa-thumb-tack"></i> Modalidad Ejecución</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Fecha</th>
                      </tr>
                    </thead>
                    </table>
                    </center>
                    </div>
                    <center>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-log-out"></span>
                            Cerrar
                          </button>
                        </div>
                      </div>
                      </center>

                    </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.fin  Ventana Registar MOdalidad de Ejecucion-->
<!-- /.Ventana Registar tipologia de no pip -->
<div class="modal fade" id="ventana_ver_tipologia" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          Tipología de No Pip</h4>
        </div>
        <div class="modal-body">
         <div class="row">
                    <div class="col-xs-12">
                                        <!-- PAGE CONTENT BEGINS -->
              <form class="form-horizontal " id="form_AddTipoNoPip"   action="<?php echo base_url(); ?>bancoproyectos/Get_TipoNoPip" method="POST" >
              <input id="txt_id_pip_Tipologia" name="txt_id_pip_Tipologia" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="ID" required="required" type="hidden">
                               <div class="item form-group">
                                    <div class="col-md-12">
                                        <label for="name">Proyecto:<span class="required"></span></label>
                                        <div class="col-md-12">
                                            <textarea readonly="readonly" name="nombreProyectoTipologia" id="nombreProyectoTipologia" rows="2" class="form-control"></textarea>
                                            <br>
                                        </div>
                                    </div>
                                     <div class="col-md-4">

                                           <label for="name">Tipo No Pip.<span class="required"></span>
                                            </label>
                                                 <select   id="Cbx_TipoNoPip" name="Cbx_TipoNoPip" class="selectpicker form-control col-md-12 col-xs-12"   title="Buscar TipoNoPip...">
                                                </select>
                                    </div>
                                          <div class="col-md-4">
                                           <label for="name">Fecha <span class="required"></span>
                                            </label>
                                                  <input type="date" id="dateFechaIniC" name="dateFechaIniC" class="form-control col-md-6 col-xs-5" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo date("Y-m-d"); ?>" disabled="true">
                                          </div>
                                          <div class="col-md-4">
                                             <label for="name">. <span class="required"></span>
                                             </label><BR>
                                             <button  id="send" type="submit" class="btn btn-success">
                                             <span class="glyphicon glyphicon-floppy-saved"></span>Agregar
                                             </button>
                                          </div>
                      </div>

                     <div class="ln_solid"></div>
                     <div class="x_panel" style="background-color: #EEEEEE;">
                    <center>
                    <table  id="Table_TipoNoPip" class="table   table-hover" >
                    <thead >
                       <tr>
                         <th  ><i class="fa fa-thumb-tack"></i> #</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Tipología No Pip</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Fecha</th>
                      </tr>
                    </thead>
                    </table>
                    </center>
                    </div>
                    <center>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-log-out"></span>
                            Cerrar
                          </button>
                        </div>
                      </div>
                      </center>

                    </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.FIN Ventana Registar tipologia de no pip -->
<!-- /.Ventana Registar operacion y mantenimiento-->
<div class="modal fade" id="ventana_ver_operacion_mantenimeinto" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          Operación y Mantenimiento NO PI</h4>
        </div>
        <div class="modal-body">
         <div class="row">
                    <div class="col-xs-12">
                                        <!-- PAGE CONTENT BEGINS -->
              <form class="form-horizontal " id="form_AddOperacionMantenimiento"   action="<?php echo base_url(); ?>bancoproyectos/Get_OperacionMantenimiento" method="POST" >

              <div class="item form-group">
                        <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="txt_id_pip_OperMant" name="txt_id_pip_OperMant" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="ID" required="required" type="hidden">
                        </div>
                      </div>
                </div>
                               <div class="item form-group">
                                   <div class="col-md-2 col-sm-6 col-xs-12">
                                      <label>Monto Operación</label>
                                      <input  class="form-control" id="txt_monto_operacion" name="txt_monto_operacion" type="number">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label>Responsable Operación</label>
                                      <input type="text" class="form-control" id="txt_responsable_operacion" name="txt_responsable_operacion" >
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                           <label for="name">Fecha <span class="required"></span>
                                            </label>
                                                  <input type="date" id="dateFechaIniC" name="dateFechaIniC" class="form-control col-md-6 col-xs-5" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo date("Y-m-d"); ?>" disabled="true">
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                      <label>Monto Mantenimiento</label>
                                      <input  class="form-control" id="txt_monto_mantenimiento" name="txt_monto_mantenimiento" type="number">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label>Responsable Mantenimiento</label>
                                      <input type="text" class="form-control" id="txt_responsable_mantenimiento" name="txt_responsable_mantenimiento">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                      <label>.</label><br>
                                       <button  id="send" type="submit" class="btn btn-success">
                                             <span class="glyphicon glyphicon-floppy-saved"></span> Agregar
                                        </button>
                                    </div>

                      </div>

                     <div class="ln_solid"></div>
                     <div class="x_panel" style="background-color: #EEEEEE;">
                    <center>
                    <table  id="Table_OperacionMantenimiento" class="table   table-hover" >
                    <thead >
                       <tr>
                         <th  ><i class="fa fa-thumb-tack"></i> #</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Monto Operación</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Responsable Operación</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Monto Mantenimiento</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Responsable Mantenimiento</th>
                         <th  ><i class="fa fa-thumb-tack"></i> Fecha Registro</th>
                      </tr>
                    </thead>
                    </table>
                    </center>
                    </div>
                    <center>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-log-out"></span>
                            Cerrar
                          </button>
                        </div>
                      </div>
                      </center>

                    </form>
                        </div><!-- /.span -->
                 </div><!-- /.row -->
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<!-- /.Fin Ventana Registar operacion y mantenimiento-->
