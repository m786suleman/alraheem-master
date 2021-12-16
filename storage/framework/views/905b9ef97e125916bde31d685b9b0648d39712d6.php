<?php 
    $total = 0;
    $index = 0;
?>
<?php if($sales): ?>
    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php 
        $total += $sale->new_price * $sale->quantity; 
        $index++;
    ?>
        <tr>
            <td><a href="#" title="Delete" class="icon remove-from-sale" data-id="<?php echo e($sale->id); ?>"><i class="fa fa-trash-o"></i></a></td>
            <td><?php echo e($sale->name); ?></td>
            <td><?php echo e($sale->price); ?></td>
            <td><?php echo e($sale->discount); ?></td>
            <td><?php echo e($sale->new_price); ?></td>
            <td><?php echo e($sale->quantity); ?></td>
            <td><?php echo e($sale->total); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" id="total" name="total" data-id="<?php echo e($total); ?>">
<?php else: ?>
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
<?php endif; ?><?php /**PATH C:\wamp64\www\adnan\resources\views/sales/get-sale.blade.php ENDPATH**/ ?>