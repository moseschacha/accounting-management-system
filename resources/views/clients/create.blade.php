@extends('layouts.app')
@section('page-title', 'Create New Client')

@section('content')
<head>
  <!-- Include Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<form action="{{ route('clients.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="phoneNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="phoneNumber" name="phone_number">
  </div>
  <div class="mb-3">
    <label for="CompanyName" class="form-label">Company name</label>
    <input type="text" class="form-control" id="CompanyName" name="company_name">
  </div>
  <div class="mb-3">
    <label for="BankName" class="form-label">Bank Name</label>
    <input type="text" class="form-control" id="BankName" name="bank_name">
  </div>
  <div class="mb-3">
    <label for="AccountNumber" class="form-label">Account Number</label>
    <input type="number" class="form-control" id="AccountNumber" name="account_number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- Include Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
