<select class="form-control bank" name="account_name" style="width: 150px;">
    <option value="">Choose Name</option>
    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?> - <?php echo e($customer->u_name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH C:\wamp64\www\abdulrehman\resources\views/sales/get-account-names.blade.php ENDPATH**/ ?>