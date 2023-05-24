

<?php $__env->startSection('page-title', 'Create Transactions'); ?>

<?php $__env->startSection('content'); ?>
<head>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo e(route('transactions.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="transaction_date" class="form-label">Transaction Date</label>
            <input type="date" class="form-control" id="transaction_date" name="transaction_date">
        </div>
        <div class="mb-3">
            <label for="account_involved" class="form-label">Account Involved</label>
            <input type="text" class="form-control" id="account_involved" name="account_involved">
        </div>
        <div class="mb-3">
            <label for="transaction_type" class="form-label">Transaction Type</label>
            <input type="text" class="form-control" id="transaction_type" name="transaction_type">
        </div>
        <div class="mb-3">
            <label for="transaction_method" class="form-label">Transaction Method</label>
            <input type="text" class="form-control" id="transaction_method" name="transaction_method">
        </div>
        <div class="mb-3">
            <label for="transaction_reference" class="form-label">Transaction Reference</label>
            <input type="text" class="form-control" id="transaction_reference" name="transaction_reference">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\accounting-management\resources\views/transactions/create.blade.php ENDPATH**/ ?>