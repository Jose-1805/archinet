<?php $__env->startSection('content'); ?>
        <div class="container-fluid white padding-50">
            <div class="row">
                <p class="titulo_principal margin-bottom-20">Modulos y Funciones</p>

                <div class="col-12">
                <div class="alert alert-warning" role="alert">.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Alerta! </strong>esta funcionalidad es de vital importancía para el correcto funcionamiento del sistema, debe ser manipulada con el respectivo cuidado y responsabilidad.
                </div>
                </div>
                <div class="col-md-5" id="contenedor-modulos" style="min-height: 50px;">

                </div>

                <div class="col-md-4">
                    <div class="row" >
                        <div class="col-12 ">
                            <div class="col-12 no-padding" id="contenedor-funciones" style="min-height: 50px;">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <?php $disabled = ''; ?>
                    <?php if(!Auth::user()->tieneFuncion($identificador_modulo,'crear',$privilegio_superadministrador)): ?>
                            <?php $disabled = 'disabled'; ?>
                    <?php endif; ?>
                    <a class="btn btn-block btn-success" data-toggle="modal" <?php if($disabled == ''): ?> data-target="#modal-nuevo-modulo" <?php endif; ?><?php echo e($disabled); ?>>Nuevo Módulo</a>
                    <a class="btn btn-block btn-success" data-toggle="modal" <?php if($disabled == ''): ?> data-target="#modal-nueva-funcion" <?php endif; ?><?php echo e($disabled); ?>>Nueva Función</a>
                </div>
            </div>
        </div>

        <?php echo $__env->make('modulos_funciones.modales', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('js/modulos_funciones/modulos_funciones.js')); ?>"></script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>