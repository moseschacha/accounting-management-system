@extends('layouts.app')
@section('page-title', 'Dashboard')

@section('content')

<head>
  <title>Accounting Management</title>
</head>
<body>
  <h1>Accounting Management</h1>

  <h2>Clients</h2>
  <a href="{{route('clients.create')}}">create</a>
  <table class="table table-success table-striped">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Phone Number</th>
      <th>Company Name</th>
      <th>Bank Name</th>
      <th>Account Number</th>
    </tr>
    <!-- Table rows for clients -->
    <tr>
      <td>Client 1</td>
      <td>client1@example.com</td>
      <td>********</td>
      <td>1234567890</td>
      <td>Company A</td>
      <td>Bank A</td>
      <td>12345678</td>
    </tr>
    <tr>
      <td>Client 2</td>
      <td>client2@example.com</td>
      <td>********</td>
      <td>9876543210</td>
      <td>Company B</td>
      <td>Bank B</td>
      <td>87654321</td>
    </tr>
    <!-- Add more rows as needed -->
  </table>

  <h2>Receivables</h2>
  <a href="{{route('receivables.create')}}">create</a>
  <table class="table table-striped">
    <tr>
      <th>Customer Name</th>
      <th>Customer Address</th>
      <th>Phone Number</th>
      <th>Invoice Date</th>
      <th>Due Date</th>
      <th>Invoice Amount</th>
      <th>Terms of Payment</th>
    </tr>
    <!-- Table rows for receivables -->
    <tr>
      <td>Customer 1</td>
      <td>Address 1</td>
      <td>1234567890</td>
      <td>2023-05-01</td>
      <td>2023-05-15</td>
      <td>$1000</td>
      <td>Net 30</td>
    </tr>
    <tr>
      <td>Customer 2</td>
      <td>Address 2</td>
      <td>9876543210</td>
      <td>2023-05-02</td>
      <td>2023-05-16</td>
      <td>$1500</td>
      <td
    </tr>
  </table>

  <h2>Payables</h2>
  <a href="{{route('payables.create')}}">create</a>
  <table class="table table-success table-striped">
    <tr>
      <th>Vendor Name</th>
      <th>Vendor Address</th>
      <th>Phone Number</th>
      <th>Vendor Invoice</th>
      <th>Due Date</th>
      <th>Payment Terms</th>
    </tr>
    <!-- Table rows for payables -->
    <tr >
      <td>Vendor 1</td>
      <td>Address 1</td>
      <td>1234567890</td>
      <td>Invoice 001</td>
      <td>2023-05-20</td>
      <td>Net 30</td>
    </tr>
    <tr>
      <td>Vendor 2</td>
      <td>Address 2</td>
      <td>9876543210</td>
      <td>Invoice 002</td>
      <td>2023-05-25</td>
      <td>Net 45</td>
    </tr>
    <!-- Add more rows as needed -->
  </table>

  <h2>Transactions</h2>
  <a href="{{route('transactions.create')}}">create</a>
  <table class="table table-striped">
    <tr>
      <th>Date</th>
      <th>Account Involved</th>
      <th>Type</th>
      <th>Method</th>
      <th>Reference</th>
    </tr>
    <!-- Table rows for transactions -->
    <tr>
      <td>2023-05-10</td>
      <td>Account A</td>
      <td>Expense</td>
      <td>Credit Card</td>
      <td>Ref123</td>
    </tr>
    <tr>
      <td>2023-05-11</td>
      <td>Account B</td>
      <td>Income</td>
      <td>Cash</td>
      <td>Ref456</td>
    </tr>
    <!-- Add more rows as needed -->
  </table>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
@endsection