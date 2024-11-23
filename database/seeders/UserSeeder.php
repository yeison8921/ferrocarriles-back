<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Seeder para tabla Usuarios
         */

        $users = [
            ['name' => 'Yeison Briceño', 'email' => 'yeison@mail.com', 'password' => Hash::make('123'), 'rol_id' => 1],
        ];

        DB::table('users')->insert($users);
    }
}
