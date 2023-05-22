<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'nombre'      => 'Social',
        ]);

        Area::create([
            'nombre'      => 'Proyecto',
        ]);

        Area::create([
            'nombre'      => 'Operativa',
        ]);

        Area::create([
            'nombre'      => 'Notarial',
        ]);

        Area::create([
            'nombre'      => 'Legal',
        ]);
    }
}
