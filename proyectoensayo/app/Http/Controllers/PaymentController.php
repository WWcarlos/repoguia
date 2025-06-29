<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('enrollment.student', 'enrollment.course')->get();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $enrollments = Enrollment::with('student', 'course')->get();
        return view('payments.create', compact('enrollments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string',
            'receipt' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('receipt')) {
            $data['receipt'] = $request->file('receipt')->store('receipts', 'public');
        }

        Payment::create($data);

        return redirect()->route('payments.index')->with('success', 'Payment registered successfully.');
    }

    public function edit(Payment $payment)
    {
        $enrollments = Enrollment::with('student', 'course')->get();
        return view('payments.edit', compact('payment', 'enrollments'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string',
            'receipt' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('receipt')) {
            // Opcional: borrar archivo anterior
            if ($payment->receipt) {
                Storage::disk('public')->delete($payment->receipt);
            }

            $data['receipt'] = $request->file('receipt')->store('receipts', 'public');
        }

        $payment->update($data);

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        if ($payment->receipt) {
            Storage::disk('public')->delete($payment->receipt);
        }

        $payment->delete();

        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully.');
    }

    public function show(Payment $payment)
    {
        return view('payments.show', compact('payment'));
    }
}
