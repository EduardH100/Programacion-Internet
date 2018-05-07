<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8">
    <div class="alert alert-info">Agregar programa a: <?php echo e($user->name); ?></div>
    
    <?php if($user->programas->count() > 0): ?>
      <?php echo Form::open(['route' => ['user.programa.update', $user->id], 'method' => 'PATCH'], ['class' => 'form']); ?>

    <?php else: ?>
      <?php echo Form::open(['route' => ['user.programa.store', $user->id]], ['class' => 'form']); ?>

    <?php endif; ?>
    
        <?php echo Form::label('programa_id', 'Seleccione un Programa:', ['class' => 'form-label']); ?>

         
        <select name="programa_id[]" class="form-control" multiple>
            <?php $__currentLoopData = $programas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($key); ?>" <?php echo e(array_search($key, $misProgramas) !== false ? 'selected' : ''); ?>><?php echo e($value); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
  
    
        <?php echo Form::submit('Aceptar', ['class' => 'btn btn-success']); ?>

    <?php echo Form::close(); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>