@extends('layouts.app')
@section('page-title', 'Payables')

@section('content')
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
    @foreach ($payables as $payable)
    <tr>
      <td>{{ $payable->vendor_name }}</td>
      <td>{{ $payable->vendor_address }}</td>
      <td>{{ $payable->vendor_phone_number }}</td>
      <td>{{ $payable->vendor_invoice }}</td>
      <td>{{ $payable->due_date }}</td>
      <td>{{ $payable->payment_terms }}</td>
    </tr>
    @endforeach
    <!-- Add more rows for additional payables -->
  </tbody>
</table>

<a href="{{ route('payables.create') }}">Create Payables</a><br />

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
