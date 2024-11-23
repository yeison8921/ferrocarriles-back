<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Seeder para tabla secciones
         */

        $secciones = [
            ['nombre' => 'RESOLUCIONES', 'pagina_id' => 7],
            ['nombre' => 'DECRETOS', 'pagina_id' => 8],
            ['nombre' => 'LEYES', 'pagina_id' => 9],
            ['nombre' => 'ANEXOS', 'pagina_id' => 10],
            ['nombre' => 'DOCUMENTOS', 'pagina_id' => 11],
            ['nombre' => 'SISTEMA INTEGRADO DE GESTIÓN', 'pagina_id' => 12],
        ];

        DB::table('secciones')->insert($secciones);
    }
}
