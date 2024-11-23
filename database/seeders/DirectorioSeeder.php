<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Seeder para tabla directorios
         */

        $directorios = [
            ['pagina_id' => 13]
        ];

        DB::table('directorios')->insert($directorios);
    }
}
