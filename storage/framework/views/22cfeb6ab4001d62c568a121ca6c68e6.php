
<?php $__env->startSection('page-title', 'Create Payables'); ?>

<?php $__env->startSection('content'); ?>
<head>
  <title>Create Payables</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<form action="<?php echo e(route('payables.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="vendorName" class="form-label">Vendor Name</label>
    <input type="string" class="form-control" id="vendorName" name="vendor_name">
  </div>
  <div class="mb-3">
    <label for="vendorAddress" class="form-label">Vendor Email address</label>
    <input type="email" class="form-control" id="vendorAddress" name="vendor_address">
  </div>
  <div class="mb-3">
    <label for="PhoneNumber" class="form-label">Vendor Phone Number</label>
    <input type="number" class="form-control" id="PhoneNumber" name="vendor_phone_number">
  </div>
  <div class="mb-3">
    <label for="vendorInvoice" class="form-label">Vendor Invoice</label>
    <input type="string" class="form-control" id="vendorInvoice" name="vendor_invoice">
  </div>
  <div class="mb-3">
    <label for="DueDate" class="form-label">Due Date</label>
    <input type="date" class="form-control" id="DueDate" name="due_date">
  </div>
  <div class="mb-3">
    <label for="paymentTerms" class="form-label">Payment Terms</label>
    <input type="string" class="form-control" id="PaymentTerms" name="payment_terms">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\accounting-management\resources\views/payables/create.blade.php ENDPATH**/ ?>