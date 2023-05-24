

<?php $__env->startSection('page-title', 'Transactions'); ?>

<?php $__env->startSection('content'); ?>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Accounting Management - Transactions</title>
</head>
<body>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Transaction Date</th>
        <th scope="col">Account Involved</th>
        <th scope="col">Type</th>
        <th scope="col">Method</th>
        <th scope="col">Reference</th>
      </tr>
    </thead>
    <tbody>
      <!-- Add rows for transaction data -->
      <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($transaction->transaction_date); ?></td>
          <td><?php echo e($transaction->account_involved); ?></td>
          <td><?php echo e($transaction->type); ?></td>
          <td><?php echo e($transaction->method); ?></td>
          <td><?php echo e($transaction->reference); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!-- Add more rows for additional transactions -->
    </tbody>
  </table>
  <a href="<?php echo e(route('transactions.create')); ?>">Create Transaction</a><br />

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\accounting-management\resources\views/transactions/index.blade.php ENDPATH**/ ?>