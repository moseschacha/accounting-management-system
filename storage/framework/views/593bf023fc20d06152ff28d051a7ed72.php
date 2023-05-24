
<?php $__env->startSection('page-title', 'Payables'); ?>

<?php $__env->startSection('content'); ?>
<head>
  <title>Payables</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Vendor Name</th>
      <th scope="col">Vendor Address</th>
      <th scope="col">Vendor Phone Number</th>
      <th scope="col">Vendor Invoice</th>
      <th scope="col">Due Date</th>
      <th scope="col">Payment Terms</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $payables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($payable->vendor_name); ?></td>
      <td><?php echo e($payable->vendor_address); ?></td>
      <td><?php echo e($payable->vendor_phone_number); ?></td>
      <td><?php echo e($payable->vendor_invoice); ?></td>
      <td><?php echo e($payable->due_date); ?></td>
      <td><?php echo e($payable->payment_terms); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- Add more rows for additional payables -->
  </tbody>
</table>

<a href="<?php echo e(route('payables.create')); ?>">Create Payables</a><br />

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\accounting-management\resources\views/payables/index.blade.php ENDPATH**/ ?>