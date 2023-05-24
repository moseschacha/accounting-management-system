
<?php $__env->startSection('page-title', 'Clients'); ?>

<?php $__env->startSection('content'); ?>
<head>
  <title>Accounting Management - Clients</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Company Name</th>
      <th scope="col">Bank Name</th>
      <th scope="col">Account Number</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($client->name); ?></td>
      <td><?php echo e($client->email); ?></td>
      <td><?php echo e($client->phone_number); ?></td>
      <td><?php echo e($client->company_name); ?></td>
      <td><?php echo e($client->bank_name); ?></td>
      <td><?php echo e($client->account_number); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<a href="<?php echo e(route('clients.create')); ?>">Create Client</a><br />

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\accounting-management\resources\views/clients/index.blade.php ENDPATH**/ ?>