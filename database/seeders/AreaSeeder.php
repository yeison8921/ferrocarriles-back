<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Seeder para tabla áreas
         */

        $areas = [
            ['nombre' => 'DIRECCIÓN GENERAL', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO ATENCIÓN AL CIUDADANO Y GESTIÓN DOCUMENTAL', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO BIENES COMPRAS Y SERVICIOS ADMINISTRATIVOS', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO DE CONTABILIDAD', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO DE DEFENSA JUDICIAL', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO DE PRESUPUESTO', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO DE TESORERIA', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN DE TALENTO HUMANO', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN PRESTACIÓN DE SERVICIOS DE SALUD', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN PRESTACIÓN DE SERVICIOS DE SALUD- AFILIACIONES', 'directorio_id' => 1],
            ['nombre' => 'SECRETARÍA GENERAL', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN PRESTACIÓN DE SERVICIOS DE SALUD- ANTIOQUIA', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN PRESTACIÓN DE SERVICIOS DE SALUD- BUCARAMANGA', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN PRESTACIÓN DE SERVICIOS DE SALUD- DIVISIÓN CENTRAL', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN PRESTACIÓN DE SERVICIOS DE SALUD- PACIFICO', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO GESTIÓN PRESTACIÓN DE SERVICIOS DE SALUD-MAGDALENA', 'directorio_id' => 1],
            ['nombre' => 'GRUPO INTERNO DE TRABAJO DE PRESTACIONES ECONÓMICAS', 'directorio_id' => 1],
            ['nombre' => 'OFICINA ASESORA JURÍDICA', 'directorio_id' => 1],
            ['nombre' => 'SUBDIRECCIÓN FINANCIERA', 'directorio_id' => 1],
            ['nombre' => 'SUBDIRECCIÓN PRESTACIONES SOCIALES', 'directorio_id' => 1],
            ['nombre' => 'OFICINA ASESORA DE PLANEACIÓN Y SISTEMAS', 'directorio_id' => 1],
            ['nombre' => 'CONTROL INTERNO', 'directorio_id' => 1],
        ];

        DB::table('areas')->insert($areas);
    }
}
