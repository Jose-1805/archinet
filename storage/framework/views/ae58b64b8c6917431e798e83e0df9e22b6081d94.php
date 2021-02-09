<?php 
    $tipos = [
        'https://www.datos.gov.co/resource/xax6-k7eu.json'=>'ESTABLECIMIENTOS EDUCATIVOS DE PREESCOLAR, BÁSICA',
        'https://www.datos.gov.co/resource/wmk4-aavp.json'=>'INSTITUCIONES DE EDUCACIÓN SUPERIOR',
        'https://www.datos.gov.co/resource/9xq7-dghc.json'=>'INSTITUCIONES DE EDUCACIÓN PARA EL TRABAJO Y EL DESARROLLO HUMANO'
    ];
 ?>
<div class="row">
    <div class="col-12">
        <div class="">
            <?php echo Form::label('tipo_institucion','Tipo de intitución',['class'=>'active']); ?>

            <?php echo Form::select('tipo_institucion',$tipos,null,['id'=>'tipo_institucion','class'=>'form-control']); ?>

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="md-form">
            <?php echo Form::label('nombredepartamento','Nombre del departamento',['class'=>'active']); ?>

            <?php echo Form::text('nombredepartamento',null,['id'=>'nombredepartamento','class'=>'form-control no-paste valid-restrict-field']); ?>

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="md-form">
            <?php echo Form::label('nombremunicipio','Nombre del municipio',['class'=>'active']); ?>

            <?php echo Form::text('nombremunicipio',null,['id'=>'nombremunicipio','class'=>'form-control no-paste valid-restrict-field']); ?>

        </div>
    </div>

    <!-- DATOS DE ESTABLECIMIENTOS EDUCATIVOS DE PREESCOLAR, BÁSICA -->
    <div class="col-12 col-md-6 col-lg-4 establecimientos_preescolar_primaria">
        <div class="md-form">
            <?php echo Form::label('nombreestablecimiento','Nombre del establecimiento',['class'=>'active']); ?>

            <?php echo Form::text('nombreestablecimiento',null,['id'=>'nombreestablecimiento','class'=>'form-control alphanumeric_space no-paste valid-restrict-field']); ?>

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 establecimientos_preescolar_primaria">
        <div class="md-form">
            <?php echo Form::label('codigoestablecimiento','Código del establecimiento',['class'=>'active']); ?>

            <?php echo Form::text('codigoestablecimiento',null,['id'=>'codigoestablecimiento','class'=>'form-control numeric no-paste valid-restrict-field']); ?>

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 establecimientos_preescolar_primaria">
        <div class="md-form">
            <?php echo Form::label('calendario','Calendario',['class'=>'active']); ?>

            <?php echo Form::text('calendario',null,['id'=>'calendario','class'=>'form-control alphabetical no-paste valid-restrict-field']); ?>

        </div>
    </div>

    <!-- DATOS DE INSTITUCIONES DE EDUCACIÓN SUPERIOR -->

    <!-- DATOS DE INSTITUCIONES DE EDUCACIÓN PARA EL TRABAJO Y EL DESARROLLO HUMANO -->

    <div class="col-12 col-md-6 col-lg-4 instituciones_superior instituciones_trabajo_desarrollo_humano">
        <div class="md-form">
            <?php echo Form::label('nombreinstitucion','Nombre de la institución',['class'=>'active']); ?>

            <?php echo Form::text('nombreinstitucion',null,['id'=>'nombreinstitucion','class'=>'form-control alphanumeric_space no-paste valid-restrict-field']); ?>

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 instituciones_superior instituciones_trabajo_desarrollo_humano">
        <div class="md-form">
            <?php echo Form::label('codigoinstitucion','Código de la institución',['class'=>'active']); ?>

            <?php echo Form::text('codigoinstitucion',null,['id'=>'codigoinstitucion','class'=>'form-control numeric no-paste valid-restrict-field']); ?>

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 instituciones_superior instituciones_trabajo_desarrollo_humano">
        <div class="md-form">
            <?php echo Form::label('nitinstitucion','Nit de la institución',['class'=>'active']); ?>

            <?php echo Form::text('nitinstitucion',null,['id'=>'nitinstitucion','class'=>'form-control']); ?>

        </div>
    </div>

    <div class="col-12">
        <button type="button" class="btn btn-primary btn-block" onclick="buscarInstituciones()">Buscar</button>
    </div>

    <table id="tabla_instituciones" class="display col-12"></table>
</div>