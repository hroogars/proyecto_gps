<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="title-block">
                        <h3 class="title"> Inicio </h3>
                        <p class="title-description"> </p>
                    </div>
                

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="col-xl-4">
                        <div class="card card-success">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Success </p>
                                </div>
                            </div>
                            <div class="card-block">
                                <p>Has iniciado sesión!</p>
                            </div>
                            <div class="card-footer"> 😊 </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>