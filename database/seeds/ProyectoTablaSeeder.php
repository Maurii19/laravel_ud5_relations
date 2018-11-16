<?php

use Illuminate\Database\Seeder;

class ProyectoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	for ($i=0; $i < 10; $i++) { 
        		DB::table('proyectos')->insert([
        		'nombre' => str_random(5),
        		'titulo' => str_random(6),
        		'fechainicio' => new DateTime(),
        		'fechafin' => new DateTime(),
        		'horasestimadas' => random_int(0, 45),
                'empleado_id' => random_int(1, 10)
        	]);
        	}
        	
        
    }
}
