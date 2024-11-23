<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Seeder para tabla roles
         */

        $roles = [
            ['nombre' => 'General'],
            ['nombre' => 'Administrador'],
        ];

        DB::table('roles')->insert($roles);
    }
}
