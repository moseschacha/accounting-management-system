@extends('layouts.app')

@section('page-title', 'Transactions')

@section('content')
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
      @foreach($transactions as $transaction)
      <tr>
          <td>{{ $transaction->transaction_date }}</td>
          <td>{{ $transaction->account_involved }}</td>
          <td>{{ $transaction->type }}</td>
          <td>{{ $transaction->method }}</td>
          <td>{{ $transaction->reference }}</td>
      </tr>
      @endforeach
      <!-- Add more rows for additional transactions -->
    </tbody>
  </table>
  <a href="{{ route('transactions.create') }}">Create Transaction</a><br />

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
@endsection
