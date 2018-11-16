<?php

use Illuminate\Database\Seeder;

class Empleado_ProyectoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) { 
            # code...
        
        DB::table('empleado_proyecto')->insert([
        		'empleado_id' => random_int(1, 10),
        		'proyecto_id' => random_int(1, 10),
        		'fechainicio' => new DateTime(),
        		'fechafin' => new DateTime()
        		
        	]);
        }
    }
}
