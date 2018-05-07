  

<?php $__env->startSection('content'); ?>

<div class="row"> 
    <div class="col-md-12">
        <h2>
            Ingresa los nuevos datos del usuario
        </h2>
    </div>
</div>
<br>

<div class="row"> 
    <div class="col-md-8 offset-md-2">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
<!--         <form action = "<?php echo e(action('UserController@store')); ?>" method="POST"> -->
          <?php if(!isset($user)): ?>
              <?php echo Form::open(['action' => 'UserController@store']); ?>

          <?php else: ?>
              <?php echo Form::model($user, ['action' => ['UserController@update', $user->id, 'method' => '']]); ?>

          <?php endif; ?>
      
            <?php echo e(csrf_field()); ?>

            <div class = "form-group">
                <label for="name">Nombre:</label>
<!--                 <input type="text" name="name" placeholder="Nombre del usuario" class = "form-control" value="<?php echo e(old('name')); ?>" required> -->
                <?php echo Form::text('name', null, ['placeholder' => 'Nombre de usuario', 'class' => 'form-control', 'value' => '<?php echo e($user->name); ?>', 'required']); ?>

            </div>
      
            <div class = "form-group">
                <label for="email">Correo:</label>
<!--                 <input type="email" name="email" placeholder="Correo del usuario" class = "form-control" value="<?php echo e(old('email')); ?>" required> -->
                <?php echo Form::email('email', null, ['placeholder' => 'Correo de usuario', 'class' => 'form-control', 'value' => '<?php echo e($user->email); ?>', 'required']); ?>				
						</div>	
			
						<div class = "form-group"> 
      				<label for="password">Contraseña:</label>
							<?php echo Form::text('password', null, ['placeholder' => 'Contraseña de usuario', 'class' => 'form-control', 'value' => '<?php echo e($user->password); ?>', 'required']); ?> 
           	</div>
						
						<div class = "form-group"> 
      				<label for="password_conf">Confirmar contraseña:</label>
							<?php echo Form::text('password_conf', null, ['placeholder' => 'Confirmar contraseña', 'class' => 'form-control', 'value' => '<?php echo e($user->password_conf); ?>', 'required']); ?>

            	</div>
					
						<div class = "form-group">
                <label for="address">Direccion:</label>
                <?php echo Form::text('address', null, ['placeholder' => 'Direccion', 'class' => 'form-control', 'value' => '<?php echo e($user->address); ?>', 'required']); ?>      
            </div>
			
						<div class = "form-group">
                <label for="telephone">Telefono:</label>
                 <?php echo Form::tel('telephone', null, ['placeholder' => 'Telefono', 'class' => 'form-control', 'value' => '<?php echo e($user->telephone); ?>', 'maxlength' => '8', 'required']); ?>               
            </div>
			
						<div class = "form-group">
                <label for="age">Edad:</label>
                <?php echo Form::tel('age', null, ['placeholder' => 'Edad', 'class' => 'form-control', 'value' => '<?php echo e($user->age); ?>', 'max' => '70', 'min' => '18', 'required']); ?>             
            </div>
			
            <button type = "submit" class="btn-submit" name="submit" >Enviar</button>
        <?php echo Form::close(); ?>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>