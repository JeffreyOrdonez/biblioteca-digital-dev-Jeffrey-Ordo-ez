<h1>Usuarios</h1>
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tipo</th>
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($usuarios->usuario_id); ?></td>
            <td><?php echo e($usuarios->nombre); ?></td>
            <td><?php echo e($usuarios->apellido); ?></td>
            <td><?php echo e($usuarios->email); ?></td>
            <td><?php echo e($usuarios->tipo); ?></td>

        
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\laragon\www\biblioteca-digital-dev-Jeffrey-Ordoñez\resources\views/usuarios.blade.php ENDPATH**/ ?>