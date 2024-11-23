<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Seeder para tabla funcionarios
         */

        $funcionarios = [
            ['nombre' => 'LUZ FANY VACA GUTIERREZ', 'cargo' => 'DIRECTOR GENERAL (E)', 'correo' => 'fany.vaca@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1901', 'area_id' => 1],
            ['nombre' => 'DIEGO LEONEL PÉREZ SILVA', 'cargo' => 'CONDUCTOR MECÁNICO', 'correo' => 'noaplica@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1945', 'area_id' => 1],
            ['nombre' => 'LEIVIS MARIANA BOTINA MONTERO', 'cargo' => 'PROFESIONAL ESPECIALIZADO', 'correo' => 'mariana.botina@fps.gov.co', 'ubicacion' => 'Punto de Atención a ciudadanos', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1954', 'area_id' => 2],
            ['nombre' => 'CLARA CECILIA RODRIGUEZ PACHO', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'clara.rodriguez@fps.gov.co ', 'ubicacion' => 'Punto de Atención a ciudadanos', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1900', 'area_id' => 2],
            ['nombre' => 'CARLOS DAVID GONZALEZ AMELL', 'cargo' => 'AUXILIAR SERVIVIOS GENERALES', 'correo' => 'carlos.gonzalez@fps.gov.co', 'ubicacion' => 'Punto de Atención a ciudadanos', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1973', 'area_id' => 3],
            ['nombre' => 'NIDIA JOHANNA CADENA RAMIREZ', 'cargo' => 'Auxiliar Servicios Generales (Nom Prov)', 'correo' => 'nidia.cadena@fps.gov.co', 'ubicacion' => 'BOGOTÁ D.C.', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1942', 'area_id' => 3],
            ['nombre' => 'ANGIE CAROLINA RINCON VALVUENA', 'cargo' => 'AUXILIAR SERVICIOS GENERALES', 'correo' => 'grupo.administrativa@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1944', 'area_id' => 3],
            ['nombre' => 'NELSON FERNANDO RAMIREZ HERRERA', 'cargo' => 'CONDUCTOR MECANICO', 'correo' => 'grupo.administrativa@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1944', 'area_id' => 3],
            ['nombre' => 'JESUS ALBERTO GARZON GARZON', 'cargo' => 'CONDUCTOR MECANICO', 'correo' => 'grupo.administrativa@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1944', 'area_id' => 3],
            ['nombre' => 'JULIO CESAR GAMEZ GONZALEZ', 'cargo' => 'CONDUCTOR MECANICO', 'correo' => 'grupo.administrativa@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1943', 'area_id' => 3],
            ['nombre' => 'HECTOR RUIZ MARTINEZ', 'cargo' => 'AUXILIAR SERVICIOS GENERALES', 'correo' => 'grupo.administrativa@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1944', 'area_id' => 3],
            ['nombre' => 'ERNESTO ELIAS MENDEZ RUIZ', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'ernesto.mendez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1944', 'area_id' => 3],
            ['nombre' => 'JORGE OTALORA ALDANA', 'cargo' => 'TECNICO ADMINISTRATIVO', 'correo' => 'jorge.otalora@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1943', 'area_id' => 3],
            ['nombre' => 'ILBA CORREDOR LEIVA', 'cargo' => 'TECNICO ADMINISTRATIVO', 'correo' => 'ilba.corredor@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1942', 'area_id' => 3],
            ['nombre' => 'LUIS ALBERTO SEGURA BECERRA', 'cargo' => 'PROFESIONAL ESPECIALIZADO', 'correo' => 'luis.segura@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1941', 'area_id' => 3],
            ['nombre' => 'LINSI ALEXIS MARQUINEZ SEVILLANO', 'cargo' => 'AUXILIAR SERVICIOS GENERALES', 'correo' => 'linsi.marquinez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1933', 'area_id' => 4],
            ['nombre' => 'SERGIO DANIEL MARTINEZ', 'cargo' => 'TECNICO ADMINISTRATIVO', 'correo' => 'sergio.martinez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1933', 'area_id' => 4],
            ['nombre' => 'INGRID YANETH OVALLE POSADA', 'cargo' => 'TÉCNICO ADMINISTRATIVO', 'correo' => 'ingrid.ovalle@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1931', 'area_id' => 4],
            ['nombre' => 'HUMBERTO MALAVER PINZON', 'cargo' => 'Profesional Especializado', 'correo' => 'humberto.malaver@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1989', 'area_id' => 5],
            ['nombre' => 'ANUAR MERCADO BUSTAMANTE', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'anuar.mercado@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1989', 'area_id' => 5],
            ['nombre' => 'NANCY STELLA MUÑOZ ARIAS', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'nancy.munoz@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1989', 'area_id' => 5],
            ['nombre' => 'MEIRA JUDITH PITRE MILIAN', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'meira.petri@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1989', 'area_id' => 5],
            ['nombre' => 'ANDREA MONTIEL CARRILLO', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'andrea.montiel@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1929', 'area_id' => 6],
            ['nombre' => 'MARIA ERCILIA PAVA MEDINA', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'maria.pava@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1929', 'area_id' => 6],
            ['nombre' => 'RUBIELA QUICENO ECHEVERRY', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'rubiela.quinceno@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1929', 'area_id' => 6],
            ['nombre' => 'LUIS ALBERTO SEGURA BECERRA', 'cargo' => 'PROFESIONAL ESPECIALIZADO', 'correo' => 'luis.segura@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1935', 'area_id' => 7],
            ['nombre' => 'RINNA YOHANA MARTINEZ TORRES', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'rinna.martinez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1935', 'area_id' => 7],
            ['nombre' => 'WILLIAM FERNANDO OLIVARES LOPEZ', 'cargo' => 'Secretario Ejecutivo encargado', 'correo' => 'william.olivares@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1935', 'area_id' => 7],
            ['nombre' => 'CECILIA STELLA FORERO AREVALO', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'cecilia.forero@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1935', 'area_id' => 7],
            ['nombre' => 'MERY PATRICIA ROJAS AREVALO', 'cargo' => 'TECNICO ADMINISTRATIVO', 'correo' => 'patricia.rojas@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1935', 'area_id' => 7],
            ['nombre' => 'TATIANA PEREZ SIERRA', 'cargo' => 'Profesional Especializado 18', 'correo' => 'tatiana.perez@fps.gov.co', 'ubicacion' => 'Calle 19 # 14-21 Edificio Cudecom', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1987', 'area_id' => 8],
            ['nombre' => 'NELLY RINCÓN LEÓN', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'nelly.rincon@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1962', 'area_id' => 8],
            ['nombre' => 'SILVANO MARTINEZ LOPEZ', 'cargo' => 'ANALISTA DE SISTEMAS', 'correo' => 'silvano.martinez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1940', 'area_id' => 8],
            ['nombre' => 'NOHORA CLEMENCIA SANABRIA AGUILAR', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'nohora.sanabria@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1939', 'area_id' => 8],
            ['nombre' => 'OLGA LUCIA CARDONA SANCHEZ', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'olga.cardona@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1991', 'area_id' => 9],
            ['nombre' => 'LUZ ELENA GUTIERREZ SUAREZ', 'cargo' => 'PROFESIONAL ESPECIALIZADO', 'correo' => 'luz.gutierrez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1915', 'area_id' => 9],
            ['nombre' => 'SILVIO RIVERA DOMINGUEZ', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'silvio.rivera@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1961', 'area_id' => 10],
            ['nombre' => 'OMAR FORERO PORRAS', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'omar.forero@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1960', 'area_id' => 10],
            ['nombre' => 'IVAN JOSE PEÑALOZA CAMPO', 'cargo' => 'AUXILIAR SERVICIOS GENERALES', 'correo' => 'secretariag@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1988', 'area_id' => 11],
            ['nombre' => 'CARLOS ANTRES TOVAR OROZCO', 'cargo' => 'SECRETARIO GENERAL', 'correo' => 'carlos.tovar@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1904', 'area_id' => 11],
            ['nombre' => 'CLARA INES DUEÑAS BELTRÁN', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'clara.duenas@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1988', 'area_id' => 11],
            ['nombre' => 'LILIA AMPARO FRANCO DUQUE', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'lilia.franco@fps.gov.co', 'ubicacion' => 'Carrera 55 No. 40 A # 20 Oficina 412', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1991', 'area_id' => 12],
            ['nombre' => 'BENJAMIN HERRERA VESGA', 'cargo' => 'MEDICO ESPECIALISTA', 'correo' => 'benjamin.herrera@fps.gov.co', 'ubicacion' => 'Calle 22 # 23-45 Barrio alarcon', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1992', 'area_id' => 13],
            ['nombre' => 'LIGIA GALEANO PENAGOS', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'ligia.galeano@fps.gov.co', 'ubicacion' => 'Calle 22 # 23-45 Barrio alarcon', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1992', 'area_id' => 13],
            ['nombre' => 'XAVIER AUGUSTO NORIEGA SIRTORI', 'cargo' => 'MEDICO ESPECIALISTA', 'correo' => 'xavier.noriega@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1918', 'area_id' => 14],
            ['nombre' => 'MARTHA AZUCENA GARZON', 'cargo' => 'TÉCNICO ADMINISTRATIVO', 'correo' => 'martha.garzon@fps.gov.co', 'ubicacion' => 'Calle 25 Norte # 4 N-28', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1990', 'area_id' => 15],
            ['nombre' => 'ISABEL CRISTINA GALLO MEJIA', 'cargo' => 'MEDICO ESPECIALISTA', 'correo' => 'isabel.gallo@fps.gov.co', 'ubicacion' => 'Calle 25 Norte # 4 N-28', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1990', 'area_id' => 15],
            ['nombre' => 'RAIMUNDO GUILLERMO COHEN COGOLLO', 'cargo' => 'MEDICO ESPECIALISTA', 'correo' => 'raimundo.cohen@fps.gov.co', 'ubicacion' => 'Avenida Pedro de Heredia Calle 31 No 58-38 Centro', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1993', 'area_id' => 16],
            ['nombre' => 'CARMEN YANETH VISBAL VILORIA', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'carmen.visbal@fps.gov.co', 'ubicacion' => 'Kr 4 N° 26-40 Oficina 507 ciudadela Comercial Ro', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1994', 'area_id' => 16],
            ['nombre' => 'ANGEL ROBERT TORRES FLORES', 'cargo' => 'TECNICO ADMINISTRATIVO', 'correo' => 'robert.torres@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1922', 'area_id' => 17],
            ['nombre' => 'FRANCISCA DE ASIS ARDILA GUERRA', 'cargo' => 'TÉCNICO ADMINISTRATIVO', 'correo' => 'francisca.ardila@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1922', 'area_id' => 17],
            ['nombre' => 'GUIOMAR ANGELICA MARTINEZ RODRIGUEZ', 'cargo' => 'TECNICO ADMINISTRATIVO', 'correo' => 'guiomar.martinez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1922', 'area_id' => 17],
            ['nombre' => 'BLANCA SAMARIS MATALLANA SOTELO', 'cargo' => 'ANALISTA DE SISTEMAS', 'correo' => 'blanca.matallana@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1922', 'area_id' => 17],
            ['nombre' => 'MONICA ALEXANDRA MANRIQUE NARVAEZ', 'cargo' => 'TECNICO ADMINISTRATIVO', 'correo' => 'monica.manrique@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1922', 'area_id' => 17],
            ['nombre' => 'ANDREA LILIANA ALDANA TRUJILLO', 'cargo' => 'JEFE DE LA OFICINA ASESORA JURÍDICA', 'correo' => 'andrea.aldana@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1989', 'area_id' => 18],
            ['nombre' => 'RICARDO DAVID CASTELLANO', 'cargo' => 'AUXILIAR ADMINISTRATIVO', 'correo' => 'N/A ', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1913', 'area_id' => 18],
            ['nombre' => 'LUIS MIGUEL MOSCOTE BRITO', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'luis.moscote@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1913', 'area_id' => 18],
            ['nombre' => 'SANDRA MILENA FARFAN BRICEÑO', 'cargo' => 'SECRETARIO EJECUTIVO', 'correo' => 'sandra.farfan@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1914', 'area_id' => 19],
            ['nombre' => 'CARLOS ANDRES TOVAR OROZCO', 'cargo' => 'SUBDIRECTOR PRESTACIONES SOCIALES (€)', 'correo' => 'carlos.tovar@f.p.s.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1955', 'area_id' => 20],
            ['nombre' => 'MARIA VILMA RUIZ LOPEZ.', 'cargo' => 'Auxiliar de servicios generales', 'correo' => 'vilma.ruiz@fps.gov.co', 'ubicacion' => 'Calle 19 # 14-21 Edificio Cudecom', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1963', 'area_id' => 21],
            ['nombre' => 'FARFAN CASALLAS MARIA YANETH', 'cargo' => 'JEFE DE OFICINA ASESORA DE PLANACIÓN Y SISTEMAS', 'correo' => 'yaneth.farfan@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1914', 'area_id' => 22],
            ['nombre' => 'CIRO JORGE EDGAR SANCHÉZ CASTRO', 'cargo' => 'PROFESIONAL ESPECIALIZADO', 'correo' => 'ciro.sanchez@fps.gov.co', 'ubicacion' => 'Sede Administrativa', 'ciudad' => 'BOGOTÁ D.C', 'telefono' => '3817171 Ext. 1960', 'area_id' => 22],
        ];

        DB::table('funcionarios')->insert($funcionarios);
    }
}
