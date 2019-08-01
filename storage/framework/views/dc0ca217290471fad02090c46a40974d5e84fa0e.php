<?php $__env->startSection('content'); ?>
     <p class="text-center">Inicia Sesión para Continuar</p>
        <form id="login-form" action="<?php echo e(route('login')); ?>" method="POST" novalidate="">
            <?php echo e(csrf_field()); ?>

            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="username">E-Mail</label>
                <input type="email" class="form-control underlined" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="Su email" required> 
                 <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Su contraseña" required>
                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?> 
            </div>
            <div class="form-group">
                <label for="remember">
                    <input class="checkbox" id="remember" type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <span>Recuerdame</span>
                </label>
                <a href="<?php echo e(route('password.request')); ?>" class="forgot-btn pull-right">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Ingresar</button>
            </div>
            <div class="form-group">
                <p class="text-muted text-center">¿No tienes una cuenta?
                    <a href="<?php echo e(url('/register')); ?>">Registrate!</a>
                </p>
            </div>
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainAuth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>