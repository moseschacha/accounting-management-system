@extends('layouts.app')
@section('page-title', 'Clients')

@section('content')
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
    @foreach ($clients as $client)
    <tr>
      <td>{{ $client->name }}</td>
      <td>{{ $client->email }}</td>
      <td>{{ $client->phone_number }}</td>
      <td>{{ $client->company_name }}</td>
      <td>{{ $client->bank_name }}</td>
      <td>{{ $client->account_number }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="{{ route('clients.create') }}">Create Client</a><br />

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
