@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Payment Details</h1>

    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Student</h5>
            <p class="card-text">{{ $payment->enrollment->student->name }}</p>

            <h5 class="card-title">Course</h5>
            <p class="card-text">{{ $payment->enrollment->course->name }}</p>

            <h5 class="card-title">Amount</h5>
            <p class="card-text">${{ number_format($payment->amount, 2) }}</p>

            <h5 class="card-title">Status</h5>
            <p class="card-text">{{ ucfirst($payment->status) }}</p>

            <h5 class="card-title">Paid At</h5>
            <p class="card-text">
                {{ $payment->paid_at ? \Carbon\Carbon::parse($payment->paid_at)->format('Y-m-d') : 'Not specified' }}
            </p>

            <h5 class="card-title">Receipt</h5>
            <p class="card-text">
                @if($payment->receipt)
                    <a href="{{ asset('storage/' . $payment->receipt) }}" target="_blank">View Receipt</a>
                @else
                    No receipt uploaded
                @endif
            </p>

            <a href="{{ route('payments.index') }}" class="btn btn-secondary mt-3">Back to list</a>
        </div>
    </div>
</div>
@endsection
