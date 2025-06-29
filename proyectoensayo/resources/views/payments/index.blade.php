@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Payments List</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('payments.create') }}" class="btn btn-primary mb-3">Register New Payment</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Course</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Receipt</th>
                <th>Paid At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->enrollment->student->name }}</td>
                    <td>{{ $payment->enrollment->course->name }}</td>
                    <td>${{ number_format($payment->amount, 2) }}</td>
                    <td>{{ ucfirst($payment->status) }}</td>
                    <td>
                        @if($payment->receipt)
                            <a href="{{ asset('storage/' . $payment->receipt) }}" target="_blank">View</a>
                        @else
                            No receipt
                        @endif
                    </td>
                    <td>{{ $payment->paid_at ? \Carbon\Carbon::parse($payment->paid_at)->format('Y-m-d') : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('payments.edit', $payment) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('payments.destroy', $payment) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('payments.show', $payment) }}" class="btn btn-sm btn-info">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
