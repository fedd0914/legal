<?php

namespace Database\Seeders;

use App\Models\Expediente;
use Illuminate\Database\Seeder;

class ExpedienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expediente::create([
            // 'fecha_carga'      => '',
            'expediente' => '7381/10-17368/22-AE',
            'detalle'     => 'ACÉPTESE LA RENUNCIA SRA. GÓMEZ NORMA D.N.I. Nº 17.189.749 PLAN 120 Bº MUJERES ARGENTINAS Y ADJUDÍQUESE A SRA POZZAGLIO ALICIA ESTHER Y ESCRITURESE.-',
            'fecha_regreso'     => '2022-10-10',
            'observacion'     => '',
            'user_id'     => 1,
            'area_id'     => 1,
        ]);

        Expediente::create([
            // 'fecha_carga'      => '',
            'expediente' => '16659/22 AE',
            'detalle'     => 'HAGASE LUGAR AL CAMBIO DE TITULARIDAD POR FALLECIMIENTO DEL SR. PEROBICH EMILIO D.N.I N° 8.185.460 PLAN 100 FONAVI DE LA LOCALIDAD DE CAMPO LARGO A FAVOR DE SRA. PINEDA MARIA TERESA  D.N.I N° 11.739.137',
            'fecha_regreso'     => '2022-03-15',
            'observacion'     => 'OK',
            'user_id'     => 1,
            'area_id'     => 1,
        ]);
    }
}
