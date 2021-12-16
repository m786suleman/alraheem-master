<form action="<?php echo e(route('add-payment-to-sale-account-action')); ?>" method="POST">
    <input type="hidden" name="id" value="<?php echo e($payment->id); ?>">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="customer">Customer Name</label>
                <input type="text" class="form-control" value="<?php echo e($payment->customer['name']); ?>" name="customer" id="customer" readonly>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" value="<?php echo e($payment->balance); ?>" name="balance" id="balance" readonly>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" tabindex="0" autofocus required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form><?php /**PATH C:\wamp64\www\adnan\resources\views/payment/get-sale-payment-detail.blade.php ENDPATH**/ ?>