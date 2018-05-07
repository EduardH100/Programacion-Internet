   

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('partials.titulo', ['titulo' => 'Usuario']); ?>
    Admin / usuarios / 
<?php echo $__env->renderComponent(); ?>


<div class="row">
  <div class="col-md-3">
      <?php echo Form::open(['route' => 'registro.store']); ?>

      <?php echo Form::hidden('user_id', $user->id); ?>

      <?php echo Form::submit('Registrar Entrada', ['class' => 'btn btn-success']); ?>

      <?php echo Form::close(); ?>

  </div>
 
</div>

<div class="row">
    <div class="col-md-10">
<!--       <?php if($user->programas->count() > 0): ?>
          <ul> Programas asociados: 
              <?php $__currentLoopData = $user->programas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                  Programa: <?php echo e($programa->prog_dep); ?> <br>
                  Fecha Inicio: <?php echo e($programa->pivot->fecha_inicio); ?> 
                    
                  <?php echo Form::open(['route' => ['user.programa.destroy', $user->id, $programa->id]], ['method' => 'delete']); ?>

                  <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']); ?>

                  <?php echo Form::close(); ?>

                  </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>  
      <?php else: ?>
      <span class="alert alert-info">No hay programas relacionados</span>
      <?php endif; ?> -->
    </div>
</div>     

<div class="row"> 
  <div class="col-md-10">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Correo Electronico</th>
          <th class="text-center">Fecha de Creacion</th>
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
    <br>
    <?php echo Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'delete']); ?>

    <?php echo Form::submit('Borrar Usuario', ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tema', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>