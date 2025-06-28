<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pago;
use App\Models\User;
use App\Models\Entrada;
use Carbon\Carbon;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pagos = [];

        for ($i = 0; $i < 30; $i++) {
            $entrada = Entrada::inRandomOrder()->first();
            $usuario = User::find($entrada->vehiculo->usuario_id);
            $tarifa = $entrada->espacio->tarifa;
            $fechaEntrada = Carbon::parse($entrada->fecha_entrada);
            $fechaSalida = Carbon::parse($entrada->salida);
            $horas = $fechaEntrada->diffInHours($fechaSalida);
            $montoPagar = min($tarifa * $horas, 999999.99);

            $estado = $i % 5 == 0 ? 'Pagado' : 'Pendiente';
            $fechaPago = $estado == 'Pagado' ? Carbon::now() : null;

            $pagos[] = [
                'usuario_id' => $usuario->id,
                'entrada_id' => $entrada->id,
                'montoPagar' => $montoPagar,
                'estado' => $estado,
                'fecha_pago' => $fechaPago,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        Pago::insert($pagos);
    }
}