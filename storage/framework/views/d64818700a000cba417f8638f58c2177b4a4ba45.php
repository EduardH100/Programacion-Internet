   
<?php $__env->startSection('content'); ?>

<div class="row"> 
  <div class="col-md-12">
    <h2>
      Usuario
    </h2>
  </div>
</div>

<div class="row"> 
  <div class="col-md-10">
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Correo Electronico</th>
          <th class="text-center">Fecha de creacion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center"><?php echo e($user->name); ?></td>
          <td class="text-center"><?php echo e($user->email); ?></td>
          <td class="text-center"><?php echo e($user->created_at); ?></td>
        </tr>
      </tbody>
  </table>
    <br>
    <?php echo Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'delete']); ?>

    <?php echo Form::submit('Borrar Usuario', ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>