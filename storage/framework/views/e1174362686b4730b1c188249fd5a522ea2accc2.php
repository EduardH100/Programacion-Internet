   
<?php $__env->startSection('content'); ?>

<div class="row"> 
  <div class="col-md-12">
    <h2>
      Lista de Usuarios
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
          <th class="text-center">Direccion</th>
          <th class="text-center">telefono</th>
          <th class="text-center">Edad</th>
        </tr>
      </thead>
      <tbody>
<!--         <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td>
            <a href="<?php echo e(route('usuario.show', $usuario->id)); ?>" target="_new">
              <?php echo e($usuario->name); ?>

            </a>
          </td> -->
          <td class="text-center"><?php echo e($usuario->name); ?></td>
					<td class="text-center"><?php echo e($usuario->email); ?></td>
					<td class="text-center"><?php echo e($usuario->address); ?></td>
					<td class="text-center"><?php echo e($usuario->telephone); ?></td>
					<td class="text-center"><?php echo e($usuario->age); ?></td>
        </tr>
<!--         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
      </tbody>
    </table>
  </div>
</div>

<!--  sudo chgrp -R www-data storage/logs -->
<!--  sudo chmod -R ug+rwx storage/logs -->

<!--  Es para todas las vistas -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>