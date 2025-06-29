@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Payment</h1>

    <form action="{{ route('payments.update', $payment) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="enrollment_id">Enrollment</label>
            <select name="enrollment_id" id="enrollment_id" class="form-control" required>
                <option value="">-- Select --</option>
                @foreach($enrollments as $enrollment)
                    <option value="{{ $enrollment->id }}"
                        {{ $enrollment->id == $payment->enrollment_id ? 'selected' : '' }}>
                        {{ $enrollment->student->name }} - {{ $enrollment->course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Amount ($)</label>
            <input type="number" name="amount" id="amount" class="form-control"
                   step="0.01" min="0" value="{{ $payment->amount }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="paid" {{ $payment->status == 'paid' ? 'selected' : '' }}>Paid</option>
                <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="failed" {{ $payment->status == 'failed' ? 'selected' : '' }}>Failed</option>
            </select>
        </div>

        <div class="form-group">
            <label for="paid_at">Paid At</label>
            <input type="date" name="paid_at" id="paid_at" class="form-control"
                   value="{{ $payment->paid_at ? \Carbon\Carbon::parse($payment->paid_at)->format('Y-m-d') : '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
@endsection
