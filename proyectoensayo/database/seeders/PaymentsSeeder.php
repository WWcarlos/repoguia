<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentsSeeder extends Seeder
{
    public function run(): void
    {
        Payment::insert([
            ['enrollment_id' => 1, 'amount' => 100.00, 'status' => 'completed', 'receipt' => 'REC-001'],
            ['enrollment_id' => 2, 'amount' => 120.00, 'status' => 'completed', 'receipt' => 'REC-002'],
            ['enrollment_id' => 3, 'amount' => 110.00, 'status' => 'pending',   'receipt' => 'REC-003'],
            ['enrollment_id' => 4, 'amount' => 90.00,  'status' => 'completed', 'receipt' => 'REC-004'],
            ['enrollment_id' => 5, 'amount' => 150.00, 'status' => 'completed', 'receipt' => 'REC-005'],
            ['enrollment_id' => 6, 'amount' => 80.00,  'status' => 'failed',    'receipt' => 'REC-006'],
            ['enrollment_id' => 7, 'amount' => 130.00, 'status' => 'completed', 'receipt' => 'REC-007'],
            ['enrollment_id' => 8, 'amount' => 115.00, 'status' => 'completed', 'receipt' => 'REC-008'],
            ['enrollment_id' => 9, 'amount' => 140.00, 'status' => 'completed', 'receipt' => 'REC-009'],
            ['enrollment_id' => 10,'amount' => 99.00,  'status' => 'completed', 'receipt' => 'REC-010'],
        ]);
    }
}
