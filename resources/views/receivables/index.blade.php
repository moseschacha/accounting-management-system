@extends('layouts.app')
@section('page-title', 'receivables')

@section('content')
<head>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Address</th>
                <th scope="col">Customer Phone Number</th>
                <th scope="col">Invoice Date</th>
                <th scope="col">Due Date</th>
                <th scope="col">Invoice Amount</th>
                <th scope="col">Terms of Payment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($receivables as $receivable)
            <tr>
                <td>{{ $receivable->customer_name }}</td>
                <td>{{ $receivable->customer_address }}</td>
                <td>{{ $receivable->customer_phone_number }}</td>
                <td>{{ $receivable->invoice_date }}</td>
                <td>{{ $receivable->due_date }}</td>
                <td>{{ $receivable->invoice_amount }}</td>
                <td>{{ $receivable->terms_of_payment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('receivables.create') }}">Create Receivables</a>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
