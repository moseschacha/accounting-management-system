
<?php $__env->startSection('page-title', 'receivables'); ?>

<?php $__env->startSection('content'); ?>
<head>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Address</th>
                <th scope="col">Customer Phone Number</th>
                <th scope="col">Invoice Date</th>
                <th scope="col">Due Date</th>
                <th scope="col">Invoice Amount</th>
                <th scope="col">Terms of Payment</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $receivables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receivable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($receivable->customer_name); ?></td>
                <td><?php echo e($receivable->customer_address); ?></td>
                <td><?php echo e($receivable->customer_phone_number); ?></td>
                <td><?php echo e($receivable->invoice_date); ?></td>
                <td><?php echo e($receivable->due_date); ?></td>
                <td><?php echo e($receivable->invoice_amount); ?></td>
                <td><?php echo e($receivable->terms_of_payment); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <a href="<?php echo e(route('receivables.create')); ?>">Create Receivables</a>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\accounting-management\resources\views/receivables/index.blade.php ENDPATH**/ ?>