<table class="table">
	<thead>
		<tr>
				<th>Archivo</th>
				<th>Tamaño</th>
				<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($archivo->original_name); ?></td>  
				<td><?php echo e($archivo->size); ?></td>  
				<td>
					<a href="<?php echo e(route('descarga', $archivo->id)); ?>" class="btn btn-sm btn-info">Descargar</a>
					<?php echo Form::open(['route' => ['archivo.destroy', $archivo->id], 'method' => 'delete']); ?>

					<?php echo Form::submit('Borrar', ['class' => 'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>  
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>