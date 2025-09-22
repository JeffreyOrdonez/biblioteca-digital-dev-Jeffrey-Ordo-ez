<h1>Prestamos</h1>
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Usuario ID</th>
        <th>Libro ID</th>
        <th>Fecha de Préstamo</th>
        <th>Fecha de Devolución</th>
        <th>Fecha real de Devolución</th>
        <th>Estado</th>
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $prestamos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prestamo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($prestamo->prestamo_id); ?></td>
            <td><?php echo e($prestamo->usuario_id); ?></td>
            <td><?php echo e($prestamo->libro_id); ?></td>
            <td><?php echo e($prestamo->fecha_prestamo); ?></td>
            <td><?php echo e($prestamo->fecha_devolucion); ?></td>
            <td><?php echo e($prestamo->fecha_devolucion_real); ?></td>
            <td><?php echo e($prestamo->estado); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

    </tbody>
</table><?php /**PATH C:\laragon\www\biblioteca-digital-dev-Jeffrey-Ordoñez\resources\views/prestamos.blade.php ENDPATH**/ ?>