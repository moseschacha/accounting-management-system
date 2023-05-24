@extends('layouts.app')
@section('page-title', 'Create Receivables')

@section('content')
<head>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<form action="{{ route('receivables.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="customerName" class="form-label">Customer Name</label>
    <input type="text" class="form-control" id="customerName" name="customer_name">
  </div>
  <div class="mb-3">
    <label for="customerAddress" class="form-label">Customer Email address</label>
    <input type="email" class="form-control" id="customerAddress" name="customer_address">
  </div>
  <div class="mb-3">
    <label for="PhoneNumber" class="form-label">Customer Phone Number</label>
    <input type="number" class="form-control" id="PhoneNumber" name="customer_phone_number">
  </div>
  <div class="mb-3">
    <label for="InvoiceDate" class="form-label">Invoice Date</label>
    <input type="date" class="form-control" id="InvoiceDate" name="invoice_date">
  </div>
  <div class="mb-3">
    <label for="DueDate" class="form-label">Due Date</label>
    <input type="date" class="form-control" id="DueDate" name="due_date">
  </div>
  <div class="mb-3">
    <label for="InvoiceAmount" class="form-label">Invoice Amount</label>
    <input type="decimal" class="form-control" id="InvoiceAmount" name="invoice_amount">
  </div>
  <div class="mb-3">
    <label for="termsOfPayment" class="form-label">Payment Terms</label>
    <input type="text" class="form-control" id="termsOfPayment" name="terms_of_payment">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

  <!-- Include Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</form>
@endsection
