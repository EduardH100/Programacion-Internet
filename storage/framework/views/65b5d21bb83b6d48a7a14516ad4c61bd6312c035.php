   
<?php $__env->startSection('content'); ?>

<div class="row"> 
    <div class="col-md-12">
        <?php echo Form::open(['route' => ['archivo.store'], 'files' => 'true']); ?>

        <?php echo Form::file('archivos'); ?>

      	<?php echo Form::submit('Cargar archivos', ['class' => 'btn btn-success']); ?>

      	<?php echo Form::hidden('origen_id', $origen_id); ?>

      	<?php echo Form::hidden('origen_id', $origen_type); ?>

      	<?php echo Form::close(); ?>

    </div>
</div>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>