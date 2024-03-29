<?php
        if(!isset($funcion))$funcion = new \Archinet\Models\Funcion();
?>
<div class="row padding-top-30">
        <div class="col-12">
                <div class="md-form">
                    <?php echo Form::label('nombre','Nombre',['class'=>'active']); ?>

                    <?php echo Form::text('nombre',$funcion->nombre,['id'=>'nombre','class'=>'form-control','placeholder'=>'Nombre de la función']); ?>

                    <?php echo Form::hidden('funcion',$funcion->id,['id'=>'funcion']); ?>

                </div>
        </div>
        <div class="col-12">
                <div class="md-form">
                    <?php
                            $disabled = '';
                            if($funcion->exists)
                                $disabled = 'disabled';
                    ?>
                    <?php echo Form::label('identificador','Identificador',['class'=>'active']); ?>

                    <?php echo Form::text('identificador',$funcion->identificador,['id'=>'identificador','class'=>'form-control num-int-positivo','placeholder'=>'Número entero para identificar la función (no editable)',$disabled]); ?>

                </div>
        </div>
</div>
