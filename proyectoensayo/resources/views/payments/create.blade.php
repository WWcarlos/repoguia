@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Register Payment</h1>

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="enrollment_id">Enrollment</label>
            <select name="enrollment_id" id="enrollment_id" class="form-control" required>
                <option value="">-- Select --</option>
                @foreach($enrollments as $enrollment)
                    <option value="{{ $enrollment->id }}">
                        {{ $enrollment->student->name }} - {{ $enrollment->course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Amount ($)</label>
            <input type="number" name="amount" id="amount" step="0.01" min="0" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="paid">Paid</option>
                <option value="pending">Pending</option>
                <option value="failed">Failed</option>
            </select>
        </div>

        <div class="form-group">
            <label for="paid_at">Paid At</label>
            <input type="date" name="paid_at" id="paid_at" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Save</button>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
@endsection
