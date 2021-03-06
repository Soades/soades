




<div class="content-app fixed-header">
    <!-- app header -->
    <div class="app-header">
        <div class="pull-right">
            <a class="btn btn-default" id="par_paises_listar" role="button">
                <i class="glyphicon glyphicon-list" ></i>
            </a>
            <a class="btn btn-default" id="par_paises_nuevo" role="button">
                <i class="glyphicon glyphicon-file" ></i>
            </a>
            <a class="btn btn-default" id="par_paises_eliminar" role="button">
                <i class="glyphicon glyphicon-trash" ></i>
            </a>
            <a class="btn btn-default" id="par_paises_guardar" role="button">
                <i class="glyphicon glyphicon-floppy-disk" ></i>
            </a>
        </div>
        <ol class="breadcrumb bg-none pull-left hide-xs">
            <li><a href="#">Procesos maestros</a></li>
            <li><a href="#">datos geograficos</a></li>
            <li class="active">Paises</li>
        </ol>
        <!-- <h3 class="app-title">Drop App Modules</h3> -->
    </div><!-- /app header -->



    <!-- app body -->
    <div class="app-body">
        <div class="isotope" >
            <div id="panel-custom2" class="panel panel-default magic-element isotope-item" >
                <div class="panel-heading bg-primary text-inverse bordered-none">
                    <div class="panel-icon"><i class="icon ion-navicon-round"></i></div>
                    <div class="panel-actions">
                        <a role="button" data-refresh="#panel-custom2" title="refresh" class="btn btn-sm btn-icon">
                            <i class="icon ion-refresh text-inverse"></i>
                        </a>
                        <a role="button" data-expand="#panel-custom2" title="expand" class="btn btn-sm btn-icon">
                            <i class="icon ion-arrow-resize text-inverse"></i>
                        </a>
                        <a role="button" data-collapse="#panel-custom2" title="collapse" class="btn btn-sm btn-icon">
                            <i class="icon ion-chevron-down text-inverse"></i>
                        </a>
                        <a role="button" data-close="#panel-custom2" title="close" class="btn btn-sm btn-icon">
                            <i class="icon ion-close-round text-inverse"></i>
                        </a>
                    </div><!-- /panel-actions -->
                    <h3 class="panel-title">Gestion de meses</h3>
                </div>
                <div class="panel-body bordered-none">
                    <form style="display:none;" class="form-horizontal" id="form_par_paises" role="form">

                         <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Codigo <span class="symbol required"></span>
                            </label>
                            <div class="col-sm-10">
                                <input tabindex="1" type="text" 
                                       class="tabcontrol form-control pa_idpais" 
                                       id="pa_idpais" name="pa_idpais" />
                            </div>

                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label" for="input">Nombre</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon bg-peterriver">
                                            <i class="icon ion-ios7-calculator-outline"></i>
                                        </span>
                                      <input tabindex="1" type="text" 
                                             class="tabcontrol form-control pa_nombre" id="pa_nombre"
                                             name="pa_nombre" />
                          
                                    </div>
                                </div>
                            </div>
                        
                        

                       


                        </fieldset>
                    </form>

                    <div id="div_lista_par_paises" class="table-responsive">                                       


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- *** SHOW par_paises *** -->
<div class="options-par_paises hide">
    <div class="btn-group">
        <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
            <i class="fa fa-cog"></i>
            <span class="caret"></span>
        </button>
        <ul role="menu" class="dropdown-menu dropdown-light pull-right">
            <li>
                <a  class="show-subviews nuevo-par_paises" href="#newpar_paises" data-startFrom="right" >
                    <i class="fa fa-file-o"></i>       Nuevo
                </a>
            </li>

            <li>
                <a href="#newpar_paises" class="show-subviews edit-par_paises">
                    <i class="fa fa-pencil"></i> Editar
                </a>
            </li>
            <li>
                <a href="#" class="eliminar-par_paises">
                    <i class="fa fa-times"></i> Eliminar
                </a>
            </li>
            <li>
                <a href="#" class="auditoria-par_paises">
                    <i class="fa fa-share"></i> Auditoria
                </a>
            </li>
        </ul>
    </div>
</div>


<script src="<?php echo BASE; ?>public/template/ministerio/js/funciones.js" type="text/javascript"></script>
<script src="<?php echo BASE; ?>public/template/ministerio/js/modulos/par/js_par_paises.js" type="text/javascript"></script>
